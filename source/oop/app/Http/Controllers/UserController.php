<?php

namespace App\Http\Controllers;

use App\Services\Application;
use App\Services\Notify;
use App\Services\SocialPosting;
use App\Services\WoodenDoor;
use App\Services\DevManager1;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $notify;
    private $socialPosting;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Notify $notify, SocialPosting $socialPosting)
    {
        $this->notify = $notify;
        $this->socialPosting = $socialPosting;
    }

    public function index()
    {
        $this->notify->send('Your Reminder!', 'emails.reminder', ['email' => 'ducan11395@gmail.com', 'name' => 'annd']);
        // $this->socialPosting->post();
    }

    public function indexFactory(DevManager1 $door)
    {
        dd($door);
    }

    public function abstractFactory(Application $application)
    {
        dd($application);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
