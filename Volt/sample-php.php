<?php foreach ($invoices as $invoice) { ?>
<div class='row'>
    <div>
        ID: <?php echo $invoice->inv_id; ?>
    </div>
    <div>
        <?php if (1 === $invoice->inv_status_flag) { ?>
        Paid
        <?php } else { ?>
        Unpaid
        <?php } ?>
    </div>
    <div>
        <?php echo $invoice->inv_description; ?>
    </div>
    <div>
        <?php echo $invoice->total; ?>
    </div>
</div>
<?php } ?>