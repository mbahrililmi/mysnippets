<!-- tampilan input search -->
<!-- getMoreCampaign(1) ini merupakan fungsi js -->
<div class="input-group">
    <input type="text" class="form-control" id="search" placeholder="Pencarian" name="search" oninput="getMoreCampaign(1)">
    <button class="input-group-text border-start-0 bg-white"><i class="fa fa-search"></i></button>
</div>

<!-- tampilan select search  -->
<select name="status" id="status" class="form-select form-control" onchange="getMoreCampaign(1)">
    <option value="">Pilih Status</option>
    <option value="success">Galang Dana Berhasil Dibuat</option>
    <option value="pending">Menunggu Konfirmasi</option>
</select>

<!-- membuat id table -->
<div class="table-responsive" id="table-campaign">

</div>

<!-- membuat js to controller filter -->
@push('after-script')
<script>
    $(document).ready(function() {
        getMoreCampaign(1);

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            getMoreCampaign(page);
        });
    });

    function getMoreCampaign(page) {
        let search = $('#search').val();
        let status = $('#status').val();

        console.log(status);

        $.ajax({
            url: `{{ route('user.campaign.filter') }}` + `?page=${page}`,
            type: 'GET',
            data: {
                search: search,
                status: status,
            },
            success: function(data) {
                $('#table-campaign').html(data);
            },

        });
    }
</script>
@endpush