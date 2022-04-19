<?php

public function filterUserCampaign(Request $request){
    
    $user = Auth()->user()->id;

    if ($request->ajax()) {
    $campaigns = Campaign::with(['category', 'order'])
        ->filter($request->search, $request->status)
        ->where('campaigns.user_id', $user)
        ->where('campaigns.status', $request->status ?? '!=', null)
        ->latest()
        ->paginate(2);

    return view('user.campaign._table-campaign', ['campaigns' => $campaigns]);
    }
}