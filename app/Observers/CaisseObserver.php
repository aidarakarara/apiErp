<?php

namespace App\Observers;

use App\Models\Caisse;

class CaisseObserver
{
    /**
     * Handle the Caisse "created" event.
     *
     * @param  \App\Models\Caisse  $caisse
     * @return void
     */
    public function created(Caisse $caisse)
    {
        //
    }
    /**
     * Handle the Caisse "updating" event.
     *
     * @param  \App\Models\Caisse  $caisse
     * @return int
     */
    public function updating(Caisse $caisse)
    {
        if ($caisse->getDirty('date_caisse')) {

            return 'Eutunfrjqon jfoqlscw';
        }
    }

    /**
     * Handle the Caisse "updated" event.
     *
     * @param  \App\Models\Caisse  $caisse
     * @return void
     */
    public function updated(Caisse $caisse)
    {
    }

    /**
     * Handle the Caisse "deleted" event.
     *
     * @param  \App\Models\Caisse  $caisse
     * @return void
     */
    public function deleted(Caisse $caisse)
    {
        //
    }

    /**
     * Handle the Caisse "restored" event.
     *
     * @param  \App\Models\Caisse  $caisse
     * @return void
     */
    public function restored(Caisse $caisse)
    {
        //
    }

    /**
     * Handle the Caisse "force deleted" event.
     *
     * @param  \App\Models\Caisse  $caisse
     * @return void
     */
    public function forceDeleted(Caisse $caisse)
    {
        //
    }
}
