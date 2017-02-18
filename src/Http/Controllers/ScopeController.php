<?php

namespace dkuzmenchuk\PassportRethinkDB\Http\Controllers;

use dkuzmenchuk\PassportRethinkDB\Passport;

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
