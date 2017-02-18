<?php

namespace dkuzmenchuk\PassportRethinkdb\Http\Controllers;

use dkuzmenchuk\PassportRethinkdb\Passport;

class ScopeController
{
    /**
     * Get all of the available scopes for the application.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        return Passport::scopes();
    }
}
