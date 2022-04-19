<div class="col-lg-7">
    <div class="float-md-end">
        <select name="status" id="status" class="form-select form-control" onchange="getMoreCampaign(1)">
            <option value="">Pilih Status</option>
            <option value="success">Galang Dana Berhasil Dibuat</option>
            <option value="pending">Menunggu Konfirmasi</option>
        </select>
    </div>
</div>

<!-- menerima value status -->
<script>
        $(document).ready(function() {
        getMoreCampaign(1);

        $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                getMoreCampaign(page);
            });
        });

        function getMoreCampaign(page){
            let status = $('#status').val();

            console.log(status);

            $.ajax({
                url: `{{ route('user.campaign.filter') }}` + `?page=${page}`,
                type: 'GET',
                data: {
                    status: status,
                },
                success: function(data) {
                    $('#table-campaign').html(data);
                },

            });
        }
    </script>