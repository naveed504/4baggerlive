<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0nJLSVA0uW1eiLCf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P4V3O5HdgUZE6fcU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LCBbYucC69XIYMQf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wyJrCDyipP9piYyI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/phpinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E01CaZMAUjYB8erv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/phpdebug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4kuSp8CtjXytfgSu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/view/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.events',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rules-and-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rules',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aboutus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kUfCYVQMZvQRcHkM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/director' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'director.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'director.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/director/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'director.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unapproved/directors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unapproved.directors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/approve/directors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::brwoaByVIbTmw2JT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manageprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manageprofile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/updateadminprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateadminprofile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/servicefee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'servicefee.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'servicefee.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/servicefee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'servicefee.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'events.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/events/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminslider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminslider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adminslider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminslider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminslider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/homesection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homesection.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'homesection.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/homesection/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homesection.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminteams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminteams.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adminteams.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminteams/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminteams.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminallteams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminallteams',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'player.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/player/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminpayout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminpayout.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adminpayout.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminpayout/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminpayout.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/searchplayer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search.player',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscription/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player_dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/myteam' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'myteams',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/allteams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'allteams',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/requestteam' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'playerrequest',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/playerprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'playerprofile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/player/updateplayerprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateplayerprofile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team_dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/teams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'teams.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/teams/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/addplayer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.teamplayer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/searchplayer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchplayer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/allevents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'allevents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/add-team-to-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addTeamToEvent',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team/payevents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payevents',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'director_dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pay',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'team.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'event.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'event.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/event/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'event.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/PlayerFieldStatistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fieldstats.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/PlayerBatStatistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'batstats.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/PlayerRanking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ranking.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/PlayerPitchStatistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pitchstats.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/directorpayout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directorpayout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/director/paymentrefund' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paymentrefund',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email_view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pPWqrAvdKEyXO383',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bnPmjcdIZOpmmBnD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RwJB9oJzdV0jCfuW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xlYuonVIkKhXy8p6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/view/event/([^/]++)(*:27)|/admin/(?|director/([^/]++)(?|(*:64)|/edit(*:76)|(*:83))|events/(?|show(?|AdminTeams/([^/]++)(*:127)|TeamDetails/([^/]++)(*:155))|([^/]++)(?|(*:175)|/edit(*:188)|(*:196)))|s(?|ervicefee/([^/]++)(?|(*:231)|/edit(*:244)|(*:252))|ubscription/([^/]++)(?|(*:284)|/edit(*:297)|(*:305)))|admin(?|slider/([^/]++)(?|(*:341)|/edit(*:354)|(*:362))|teams/([^/]++)(?|(*:388)|/edit(*:401)|(*:409))|payout/([^/]++)(?|(*:436)|/edit(*:449)|(*:457)))|homesection/([^/]++)(?|(*:490)|/edit(*:503)|(*:511))|player/([^/]++)(?|(*:538)|/edit(*:551)|(*:559)))|/p(?|layer/(?|view\\-team/([^/]++)(*:602)|playerprofile/([^/]++)(*:632))|assword/reset/([^/]++)(*:663))|/team/(?|teams/([^/]++)(?|(*:698)|/edit(*:711)|(*:719))|add(?|player/([^/]++)(*:749)|\\-to\\-event/([^/]++)(*:777))|viewplayer/([^/]++)(*:805)|requested/players/([^/]++)(*:839)|event/([^/]++)(*:861)|showTotalTeams/([^/]++)(*:892))|/director/(?|team/([^/]++)(?|(*:930)|/edit(*:943)|(*:951))|event/([^/]++)(?|(*:977)|/edit(*:990)|(*:998))|showteam(?|sinevent/([^/]++)(*:1035)|details/([^/]++)(*:1060))|ShowPlayer/([^/]++)(*:1089)|CreatePlayerStatistics/([^/]++)(*:1129)|paymentrefundform/([^/]++)(*:1164)))/?$}sDu',
    ),
    3 => 
    array (
      27 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.event',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      64 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'director.show',
          ),
          1 => 
          array (
            0 => 'director',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'director.edit',
          ),
          1 => 
          array (
            0 => 'director',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      83 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'director.update',
          ),
          1 => 
          array (
            0 => 'director',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'director.destroy',
          ),
          1 => 
          array (
            0 => 'director',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showAdminTeams',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showTeamDetails',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.show',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.edit',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events.update',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'events.destroy',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'servicefee.show',
          ),
          1 => 
          array (
            0 => 'servicefee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'servicefee.edit',
          ),
          1 => 
          array (
            0 => 'servicefee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'servicefee.update',
          ),
          1 => 
          array (
            0 => 'servicefee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'servicefee.destroy',
          ),
          1 => 
          array (
            0 => 'servicefee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.show',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.edit',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.update',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.destroy',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminslider.show',
          ),
          1 => 
          array (
            0 => 'adminslider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminslider.edit',
          ),
          1 => 
          array (
            0 => 'adminslider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminslider.update',
          ),
          1 => 
          array (
            0 => 'adminslider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adminslider.destroy',
          ),
          1 => 
          array (
            0 => 'adminslider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminteams.show',
          ),
          1 => 
          array (
            0 => 'adminteam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminteams.edit',
          ),
          1 => 
          array (
            0 => 'adminteam',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminteams.update',
          ),
          1 => 
          array (
            0 => 'adminteam',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adminteams.destroy',
          ),
          1 => 
          array (
            0 => 'adminteam',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminpayout.show',
          ),
          1 => 
          array (
            0 => 'adminpayout',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminpayout.edit',
          ),
          1 => 
          array (
            0 => 'adminpayout',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminpayout.update',
          ),
          1 => 
          array (
            0 => 'adminpayout',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adminpayout.destroy',
          ),
          1 => 
          array (
            0 => 'adminpayout',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homesection.show',
          ),
          1 => 
          array (
            0 => 'homesection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homesection.edit',
          ),
          1 => 
          array (
            0 => 'homesection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homesection.update',
          ),
          1 => 
          array (
            0 => 'homesection',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'homesection.destroy',
          ),
          1 => 
          array (
            0 => 'homesection',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.show',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.edit',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'player.update',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'player.destroy',
          ),
          1 => 
          array (
            0 => 'player',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'viewteam',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.player.profile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.show',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.edit',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.update',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'teams.destroy',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      749 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.player',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addToEvent',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.player',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'requested.player',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.event.coach',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showTotalTeams',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team.show',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team.edit',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team.update',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'team.destroy',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'event.show',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'event.edit',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'event.update',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'event.destroy',
          ),
          1 => 
          array (
            0 => 'event',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'showteamsinevent',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.teamdetails',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.player',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.player.stats',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paymentrefundform',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::0nJLSVA0uW1eiLCf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":291:{@wjRkuGaipgUjSQQ06gDy/1PV9cc+goVmkWm3094fCQ0=.a:5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000071bb795f000000003ada6aa1";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0nJLSVA0uW1eiLCf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P4V3O5HdgUZE6fcU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":507:{@FsKLgA59WYF4Rg0YgRC3r/cxaqbp6ClCFP0FkJlwW+o=.a:5:{s:3:"use";a:0:{}s:8:"function";s:294:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'route:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'cache:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'view:clear\');
    return \'clear done\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000071bb795d000000003ada6aa1";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::P4V3O5HdgUZE6fcU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LCBbYucC69XIYMQf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":292:{@JzQ4VcBdWZYQy0KCKUw27oJSbi4wTOp4nP+zTQ4hybs=.a:5:{s:3:"use";a:0:{}s:8:"function";s:80:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'config:cache\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000071bb795b000000003ada6aa1";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::LCBbYucC69XIYMQf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wyJrCDyipP9piYyI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":323:{@HERE2+jd6gQQJp5V5h7LPv+e1n6knCQdpQbk40v4Fxc=.a:5:{s:3:"use";a:0:{}s:8:"function";s:110:"function(){
    \\Illuminate\\Support\\Facades\\Artisan::call(\'migrate\');
    return \'migrated successfully\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000071bb7959000000003ada6aa1";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wyJrCDyipP9piYyI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E01CaZMAUjYB8erv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'phpinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":246:{@3s6dbtDmIy4nEc2gDusnNwrEBisw43HZD75ZfzZW32I=.a:5:{s:3:"use";a:0:{}s:8:"function";s:34:"function(){
return \\phpinfo();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000071bb7957000000003ada6aa1";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::E01CaZMAUjYB8erv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4kuSp8CtjXytfgSu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'phpdebug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@phpdebug',
        'controller' => 'App\\Http\\Controllers\\TestController@phpdebug',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::4kuSp8CtjXytfgSu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\frontend\\HomeController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'welcome',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\HomeController@allEvents',
        'controller' => 'App\\Http\\Controllers\\frontend\\HomeController@allEvents',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'events',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.events' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\HomeController@allEvents',
        'controller' => 'App\\Http\\Controllers\\frontend\\HomeController@allEvents',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'view.events',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\HomeController@contactUs',
        'controller' => 'App\\Http\\Controllers\\frontend\\HomeController@contactUs',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contactus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rules' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rules-and-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\HomeController@rulesPolicy',
        'controller' => 'App\\Http\\Controllers\\frontend\\HomeController@rulesPolicy',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'rules',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aboutus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\HomeController@aboutUs',
        'controller' => 'App\\Http\\Controllers\\frontend\\HomeController@aboutUs',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'aboutus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kUfCYVQMZvQRcHkM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::kUfCYVQMZvQRcHkM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'frontend.pages.player.profile',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view/event/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\frontend\\FrontendEventController@viewEvent',
        'controller' => 'App\\Http\\Controllers\\frontend\\FrontendEventController@viewEvent',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'view.event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin_dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'director.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/director',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'director.index',
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'director.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/director/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'director.create',
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'director.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/director',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'director.store',
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'director.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/director/{director}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'director.show',
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'director.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/director/{director}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'director.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'director.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/director/{director}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'director.update',
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'director.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/director/{director}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'director.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unapproved.directors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unapproved/directors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@unApprovedDirectors',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@unApprovedDirectors',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'unapproved.directors',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::brwoaByVIbTmw2JT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/approve/directors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@approveDirectors',
        'controller' => 'App\\Http\\Controllers\\admin\\director\\ManageDirectorController@approveDirectors',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::brwoaByVIbTmw2JT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showAdminTeams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/showAdminTeams/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@showAdminTeams',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@showAdminTeams',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'showAdminTeams',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showTeamDetails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/showTeamDetails/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@showTeamDetails',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@showTeamDetails',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'showTeamDetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manageprofile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manageprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\generalsetting\\GeneralSettingController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\generalsetting\\GeneralSettingController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'manageprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateadminprofile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/updateadminprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\generalsetting\\GeneralSettingController@updateadminprofile',
        'controller' => 'App\\Http\\Controllers\\admin\\generalsetting\\GeneralSettingController@updateadminprofile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'updateadminprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'servicefee.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/servicefee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'servicefee.index',
        'uses' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'servicefee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/servicefee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'servicefee.create',
        'uses' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'servicefee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/servicefee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'servicefee.store',
        'uses' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'servicefee.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/servicefee/{servicefee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'servicefee.show',
        'uses' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'servicefee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/servicefee/{servicefee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'servicefee.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'servicefee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/servicefee/{servicefee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'servicefee.update',
        'uses' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'servicefee.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/servicefee/{servicefee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'servicefee.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\service\\ServiceFeeController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'events.index',
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'events.create',
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'events.store',
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'events.show',
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/events/{event}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'events.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'events.update',
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/events/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'events.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\Event\\ManageEventController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminslider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminslider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminslider.index',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminslider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminslider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminslider.create',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminslider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminslider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminslider.store',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminslider.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminslider/{adminslider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminslider.show',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminslider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminslider/{adminslider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminslider.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminslider.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/adminslider/{adminslider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminslider.update',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminslider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/adminslider/{adminslider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminslider.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSliderController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homesection.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/homesection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'homesection.index',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homesection.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/homesection/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'homesection.create',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homesection.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/homesection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'homesection.store',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homesection.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/homesection/{homesection}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'homesection.show',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homesection.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/homesection/{homesection}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'homesection.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homesection.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/homesection/{homesection}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'homesection.update',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homesection.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/homesection/{homesection}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'homesection.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\frontend\\HomeSectionController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminteams.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminteams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminteams.index',
        'uses' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminteams.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminteams/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminteams.create',
        'uses' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminteams.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminteams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminteams.store',
        'uses' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminteams.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminteams/{adminteam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminteams.show',
        'uses' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminteams.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminteams/{adminteam}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminteams.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminteams.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/adminteams/{adminteam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminteams.update',
        'uses' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminteams.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/adminteams/{adminteam}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminteams.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminallteams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminallteams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@getallTeams',
        'controller' => 'App\\Http\\Controllers\\admin\\team\\AdminTeamController@getallTeams',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'adminallteams',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'player.index',
        'uses' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'player.create',
        'uses' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/player',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'player.store',
        'uses' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'player.show',
        'uses' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/player/{player}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'player.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/player/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'player.update',
        'uses' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/player/{player}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'player.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminpayout.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminpayout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminpayout.index',
        'uses' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminpayout.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminpayout/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminpayout.create',
        'uses' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminpayout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminpayout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminpayout.store',
        'uses' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminpayout.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminpayout/{adminpayout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminpayout.show',
        'uses' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminpayout.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminpayout/{adminpayout}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminpayout.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminpayout.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/adminpayout/{adminpayout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminpayout.update',
        'uses' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminpayout.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/adminpayout/{adminpayout}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'adminpayout.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\payment\\ManagePayoutController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search.player' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/searchplayer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@searchPlayer',
        'controller' => 'App\\Http\\Controllers\\admin\\player\\PlayerController@searchPlayer',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'search.player',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'subscription.index',
        'uses' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscription/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'subscription.create',
        'uses' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'subscription.store',
        'uses' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscription/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'subscription.show',
        'uses' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscription/{subscription}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'subscription.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/subscription/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'subscription.update',
        'uses' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/subscription/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'checkrole',
        ),
        'as' => 'subscription.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\subscription\\SubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'player_dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'playerrole',
        ),
        'uses' => 'App\\Http\\Controllers\\player\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\player\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
        'as' => 'player_dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'myteams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/myteam',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'playerrole',
        ),
        'uses' => 'App\\Http\\Controllers\\player\\team\\TeamController@myTeam',
        'controller' => 'App\\Http\\Controllers\\player\\team\\TeamController@myTeam',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
        'as' => 'myteams',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'allteams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/allteams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'playerrole',
        ),
        'uses' => 'App\\Http\\Controllers\\player\\team\\TeamController@allTeams',
        'controller' => 'App\\Http\\Controllers\\player\\team\\TeamController@allTeams',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
        'as' => 'allteams',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'viewteam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/view-team/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'playerrole',
        ),
        'uses' => 'App\\Http\\Controllers\\player\\team\\TeamController@viewTeam',
        'controller' => 'App\\Http\\Controllers\\player\\team\\TeamController@viewTeam',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
        'as' => 'viewteam',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'playerrequest' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/requestteam',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'playerrole',
        ),
        'uses' => 'App\\Http\\Controllers\\player\\team\\TeamController@playerRequest',
        'controller' => 'App\\Http\\Controllers\\player\\team\\TeamController@playerRequest',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
        'as' => 'playerrequest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.player.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/playerprofile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'playerrole',
        ),
        'uses' => 'App\\Http\\Controllers\\player\\team\\TeamController@viewPlayer',
        'controller' => 'App\\Http\\Controllers\\player\\team\\TeamController@viewPlayer',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
        'as' => 'view.player.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'playerprofile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'player/playerprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'playerrole',
        ),
        'uses' => 'App\\Http\\Controllers\\player\\team\\TeamController@playerProfile',
        'controller' => 'App\\Http\\Controllers\\player\\team\\TeamController@playerProfile',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
        'as' => 'playerprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateplayerprofile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'player/updateplayerprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'playerrole',
        ),
        'uses' => 'App\\Http\\Controllers\\player\\team\\TeamController@updatePlayerProfile',
        'controller' => 'App\\Http\\Controllers\\player\\team\\TeamController@updatePlayerProfile',
        'namespace' => NULL,
        'prefix' => '/player',
        'where' => 
        array (
        ),
        'as' => 'updateplayerprofile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team_dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\team\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'team_dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/teams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'as' => 'teams.index',
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@index',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@index',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/teams/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'as' => 'teams.create',
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@create',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@create',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team/teams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'as' => 'teams.store',
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@store',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@store',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'as' => 'teams.show',
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@show',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@show',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/teams/{team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'as' => 'teams.edit',
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@edit',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'team/teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'as' => 'teams.update',
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@update',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@update',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'team/teams/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'as' => 'teams.destroy',
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@destroy',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/addplayer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@addPlayer',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@addPlayer',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'add.player',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/viewplayer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@viewPlayer',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@viewPlayer',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'view.player',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.teamplayer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team/addplayer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@addPlayerToTeam',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@addPlayerToTeam',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'add.teamplayer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'requested.player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/requested/players/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@viewRequestedPlayers',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@viewRequestedPlayers',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'requested.player',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchplayer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team/searchplayer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@searchPlayer',
        'controller' => 'App\\Http\\Controllers\\team\\team\\ManageTeamController@searchPlayer',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'searchplayer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'allevents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/allevents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\event\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\team\\event\\EventController@index',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'allevents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addTeamToEvent' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team/add-team-to-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\event\\EventController@addTeamToEvent',
        'controller' => 'App\\Http\\Controllers\\team\\event\\EventController@addTeamToEvent',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'addTeamToEvent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addToEvent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/add-to-event/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\event\\EventController@addToEvent',
        'controller' => 'App\\Http\\Controllers\\team\\event\\EventController@addToEvent',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'addToEvent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.event.coach' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/event/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\event\\EventController@viewEvent',
        'controller' => 'App\\Http\\Controllers\\team\\event\\EventController@viewEvent',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'view.event.coach',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payevents' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'team/payevents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\event\\EventController@payTeamForEvent',
        'controller' => 'App\\Http\\Controllers\\team\\event\\EventController@payTeamForEvent',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'payevents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showTotalTeams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team/showTotalTeams/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'teamrole',
        ),
        'uses' => 'App\\Http\\Controllers\\team\\event\\EventController@showTotalTeams',
        'controller' => 'App\\Http\\Controllers\\team\\event\\EventController@showTotalTeams',
        'namespace' => NULL,
        'prefix' => '/team',
        'where' => 
        array (
        ),
        'as' => 'showTotalTeams',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'director_dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\director\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'director_dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\HomeController@pay',
        'controller' => 'App\\Http\\Controllers\\director\\HomeController@pay',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'team.index',
        'uses' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@index',
        'controller' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@index',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'team.create',
        'uses' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@create',
        'controller' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@create',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'director/team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'team.store',
        'uses' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@store',
        'controller' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@store',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/team/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'team.show',
        'uses' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@show',
        'controller' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@show',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/team/{team}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'team.edit',
        'uses' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@edit',
        'controller' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@edit',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'director/team/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'team.update',
        'uses' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@update',
        'controller' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@update',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'director/team/{team}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'team.destroy',
        'uses' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@destroy',
        'controller' => 'App\\Http\\Controllers\\director\\Team\\ManageTeamController@destroy',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'event.index',
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@index',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/event/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'event.create',
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@create',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@create',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'director/event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'event.store',
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@store',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@store',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/event/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'event.show',
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@show',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@show',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/event/{event}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'event.edit',
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@edit',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@edit',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'director/event/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'event.update',
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@update',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@update',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'event.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'director/event/{event}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'as' => 'event.destroy',
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@destroy',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@destroy',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'showteamsinevent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/showteamsinevent/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@showTeamsInEvent',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@showTeamsInEvent',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'showteamsinevent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'show.teamdetails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/showteamdetails/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@showTeamDetails',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@showTeamDetails',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'show.teamdetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'show.player' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/ShowPlayer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\Event\\EventController@showPlayer',
        'controller' => 'App\\Http\\Controllers\\director\\Event\\EventController@showPlayer',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'show.player',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.player.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/CreatePlayerStatistics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@index',
        'controller' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@index',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'add.player.stats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fieldstats.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'director/PlayerFieldStatistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@storeFieldStats',
        'controller' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@storeFieldStats',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'fieldstats.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'batstats.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'director/PlayerBatStatistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@storeBatStats',
        'controller' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@storeBatStats',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'batstats.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ranking.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'director/PlayerRanking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@storeRanking',
        'controller' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@storeRanking',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'ranking.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pitchstats.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'director/PlayerPitchStatistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@storePitchStats',
        'controller' => 'App\\Http\\Controllers\\director\\player\\ManagePlayerStatisticsController@storePitchStats',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'pitchstats.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directorpayout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/directorpayout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\HomeController@directorPayout',
        'controller' => 'App\\Http\\Controllers\\director\\HomeController@directorPayout',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'directorpayout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paymentrefundform' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'director/paymentrefundform/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\HomeController@showPaymentRefundForm',
        'controller' => 'App\\Http\\Controllers\\director\\HomeController@showPaymentRefundForm',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'paymentrefundform',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paymentrefund' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'director/paymentrefund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'directorrole',
        ),
        'uses' => 'App\\Http\\Controllers\\director\\HomeController@refundTransaction',
        'controller' => 'App\\Http\\Controllers\\director\\HomeController@refundTransaction',
        'namespace' => NULL,
        'prefix' => '/director',
        'where' => 
        array (
        ),
        'as' => 'paymentrefund',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pPWqrAvdKEyXO383' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email_view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":282:{@BbkM10wFWDD5A3x08Mc5Hy1wwBzU3IOB29Lkd1aVf0s=.a:5:{s:3:"use";a:0:{}s:8:"function";s:70:"function(){
    return \\view(\'email.adminNotifyDirectorRegister\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000071bb792c000000003ada6aa1";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::pPWqrAvdKEyXO383',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bnPmjcdIZOpmmBnD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::bnPmjcdIZOpmmBnD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RwJB9oJzdV0jCfuW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::RwJB9oJzdV0jCfuW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xlYuonVIkKhXy8p6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::xlYuonVIkKhXy8p6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
