<?php

namespace twitter\acceptance;

use twitter\AcceptanceTester;

class AuthCest
{
    public function testTwitterSignUpAndLogin(AcceptanceTester $I)
    {
        $I->amAdmin();
        $I->amOnPage('/auth-twitter/admin');
        $I->waitForText('Twitter Sign-In configuration');
        $I->checkOption('#configureform-enabled');
        $I->fillField('input[name="ConfigureForm[consumerId]"]', 'TestId');
        $I->fillField('input[name="ConfigureForm[consumerSecret]"]', 'TestSecret');
        $I->click('Save');
        $I->seeSuccess();
        $I->logout();

        $I->wantTo('sign up with twitter');

        $I->amOnPage('/user/auth/login');
        $I->waitForText('Twitter', 10, '.authChoice');
        $I->wantTo('sign up with twitter');
        $I->click('Twitter');

        // TODO: The code below doesn't work because no Test API keys:
        //$I->waitForText('Create Account');
        //$I->see('Password cannot be blank.');
        //$I->fillField('User[username]', 'twitter-test');
        //$I->fillField('Profile[firstname]', 'Twitter');
        //$I->fillField('Profile[lastname]', 'Test');
        //$I->jsClick('[name="save"]');
        //$I->wait(3);
        //$I->amOnUrl('dashboard');

        //$I->wantTo('log in with twitter');

        //$I->logout();
        //$I->amOnPage('/user/auth/login');
        //$I->jsClick('[href="/user/auth/external?authclient=twitter"]');
        //$I->wait(3);
        //$I->amOnUrl('dashboard');
    }

}
