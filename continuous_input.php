<button class="bg-white border-0 hover-bg-primary" onclick="create_input_hierarchy()">
    <p class="text-primary">
        <i class="bi bi-plus-lg"></i>
        Add Coloumn
    </p>
</button>

<script>
    function create_input_hierarchy() {
        $('#form-hierarchy').append(
            `<div class="input-group mb-3"><input type="text" class="form-control" placeholder="input hierarchy"></div>`
        )
    }
</script>