<?php

namespace App\Http\Controllers;

use App\Http\Resources\CampaignResource;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Campaign/Index', [
            'records' => CampaignResource::collection(Campaign::latest()->get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Campaign/Store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255', 'unique:campaigns'],
            'content' => ['string'],
        ]);

        $campaign = new Campaign($request->only('title', 'content'));
        $campaign->save();

        return redirect()->route('admin.campaigns.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Campaign $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Campaign $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        return Inertia::render('Campaign/Store', [
            'record' => CampaignResource::make($campaign)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Campaign $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'title' => ['required', 'max:255', Rule::unique('campaigns')->ignore($campaign->id)],
            'content' => ['string'],
        ]);

        $campaign = $campaign->fill($request->only('title', 'content'));
        $campaign->save();

        return redirect()->route('admin.campaigns.edit', ['campaign' => $campaign]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Campaign $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        return redirect()->route('admin.campaigns.index');
    }
}
