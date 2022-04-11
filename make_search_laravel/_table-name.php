<table class="table table-hover table-bordered" >
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Judul Kampanye</th>
        <th scope="col">Total Pendonasi</th>
        <th scope="col">Status</th>
        <th scope="col" style="width: 100px">Terkumpul</th>
        <th scope="col" style="width: 140px">Target</th>
        <th scope="col">Berakhir</th>
        <th scope="col" style="width: 90px">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($campaigns as $index => $campaign)
        <tr>
            <td>{{ $campaigns->firstItem() + $index }}</td>
            <td>{{ tgl_indo($campaign->start->format('d-m-Y'))  }}</td>
            <td> 
                {{ $campaign->title }}
            </td>
            <td>{{ count($campaign->order) }}</td>
            <td>
                @if ($campaign->sisa_hari <= 0)
                    <span class='badge bg-danger'>Waktu Habis</span>
                @else
                    {!! campaign_status($campaign->status) !!}
                @endif
            </td>
            <td>{{ rupiahFormat($campaign->order->sum('total')) }}</td>
            <td>{{ rupiahFormat($campaign->target) }}</td>
            <td>{{ tgl_indo($campaign->end->format('d-m-Y')) }}</td>
            <td>
                @if ($campaign->status == 'pending')
                <a href="{{ route('user.campaign.edit', ['id'=> $campaign->id]) }}" class="btn btn-warning btn-sm mb-1 " title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                <form action="{{ route('user.campaign.destroy', ['id' => $campaign->id]) }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('do you want to delete this data ?')" type="submit" class="btn btn-danger btn-sm mb-1 ms-1" title="Hapus"><i class="fas fa-fw fa-trash"></i></button>
                    <input type="hidden" name="id">
                </form>
                @endif
                <a href="{{ route('campaign.detail', ['slug' => $campaign->slug]) }}" class="btn btn-primary" title="Preview">Preview</a>
            </td>
        </tr>
        @endforeach
       
    </tbody>
  </table>
    {{ $campaigns->links() }}