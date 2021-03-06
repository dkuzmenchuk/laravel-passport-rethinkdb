<?php

namespace dkuzmenchuk\PassportRethinkdb\Http\Controllers;

use Exception;
use dkuzmenchuk\RethinkDB\Eloquent\Model;
use Illuminate\Http\Request;
use dkuzmenchuk\PassportRethinkdb\Bridge\User;

trait RetrievesAuthRequestFromSession
{
    /**
     * Get the authorization request from the session.
     *
     * @param  Request  $request
     * @return AuthorizationRequest
     */
    protected function getAuthRequestFromSession(Request $request)
    {
        return tap($request->session()->get('authRequest'), function ($authRequest) use ($request) {
            if (! $authRequest) {
                throw new Exception('Authorization request was not present in the session.');
            }

            $authRequest->setUser(new User($request->user()->getKey()));

            $authRequest->setAuthorizationApproved(true);
        });
    }
}
