<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use App\Models\User;

class Contact extends Model
{

    protected static function booted()
    {
        static::created(function ($contact) {

            // Get all admin panel users
            $admins = User::all();
            // If only one admin, you can use User::first()

            foreach ($admins as $admin) {
                Notification::make()
                    ->title('New Lead Received')
                    ->body("New lead from {$contact->id}")
                    ->actions([
                        \Filament\Actions\Action::make('view')
                            ->url(route(
                                'filament.admin.resources.contacts.view',
                                $contact
                            ))
                            ->markAsRead()
                    ])
                    ->sendToDatabase($admin);
            }
        });
    }
    protected $fillable = [
        'name',
        'email',
        'phone',
        'from',
        'to',
        'when',
        'distance',
        'move_type',
        'service_type',
    ];
}
