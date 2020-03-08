<?php

namespace App\Policies;

use App\User;
use App\Model\Agenda;
use Illuminate\Auth\Access\HandlesAuthorization;

class AgendaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the agenda.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Agenda  $agenda
     * @return mixed
     */
    public function view(User $user, Agenda $agenda)
    {
        //
    }

    /**
     * Determine whether the user can create agendas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the agenda.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Agenda  $agenda
     * @return mixed
     */
    public function update(User $user, Agenda $agenda)
    {
        //
    }

    /**
     * Determine whether the user can delete the agenda.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Agenda  $agenda
     * @return mixed
     */
    public function delete(User $user, Agenda $agenda)
    {
        //
    }
}
