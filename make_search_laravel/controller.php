<?php 
public function index()
    {
        $data = [
            'title' => 'Galang Dana',
            'sub_title' => 'untuk berbagi Kebaikan',
        ];

        return view('user.campaign.index', $data);
    }

public function filter(Request $request)
    {
        if ($request->ajax()) {
            $campaigns = Campaign::with(['category', 'order'])
                ->filter($request->search, $request->status)
                ->where('campaigns.status', $request->status ?? '!=', null)
                ->latest()
                ->paginate(5);

            return view('user.campaign._table-campaign', ['campaigns' => $campaigns]);
        }
    }

}
    ?>