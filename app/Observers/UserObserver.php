<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    /**
     * Handle the User "creating" event.
     */
    public function creating(User $user): void
    {
        // Code to execute before a user is created
    }

    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // Code to execute after a user is created
        Log::info('User Created: ' . $user->id);
        Mail::to($user->email)->send(new UserCreated($user));
    }

    /**
     * Handle the User "updating" event.
     */
    public function updating(User $user): void
    {
        // Code to execute before a user is updated
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        // Code to execute after a user is updated
    }

    /**
     * Handle the User "deleting" event.
     */
    public function deleting(User $user): void
    {
        // Code to execute before a user is deleted
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        // Code to execute after a user is deleted
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        // Code to execute after a user is restored
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        // Code to execute after a user is force Deleted
    }
}
