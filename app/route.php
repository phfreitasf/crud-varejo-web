<?php

// $this->input=[
//     "GET"=>[
//         "/" => "Home@index",
//     ]
// ];
$route->get('/', 'Home@index');
$route->get('/teste', 'Test@show');
// $this->input=[
//     "POST"=>[
//         "/login/auth" => "Login@auth",
//     ]
// ];
$route->post('/login/auth', 'Login@auth');
