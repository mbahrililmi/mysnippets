<div id="printableArea">
    <h1>Print me</h1>
</div>

<input type="button" onclick="printDiv('printableArea')" value="print a div!" />

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

<!-- Furthermore https://stackoverflow.com/questions/468881/print-div-id-printarea-div-only -->