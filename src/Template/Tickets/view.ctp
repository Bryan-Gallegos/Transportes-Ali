<section class="content-header">
  <h1>
    Ticket
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Destiny') ?></dt>
            <dd><?= $ticket->has('destiny') ? $this->Html->link($ticket->destiny->name, ['controller' => 'Destinies', 'action' => 'view', $ticket->destiny->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Client') ?></dt>
            <dd><?= $ticket->has('client') ? $this->Html->link($ticket->client->name, ['controller' => 'Clients', 'action' => 'view', $ticket->client->id]) : '' ?></dd>
            <dt scope="row"><?= __('Bus') ?></dt>
            <dd><?= $ticket->has('bus') ? $this->Html->link($ticket->bus->id, ['controller' => 'Buses', 'action' => 'view', $ticket->bus->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($ticket->id) ?></dd>
            <dt scope="row"><?= __('Document') ?></dt>
            <dd><?= $this->Number->format($ticket->document) ?></dd>
            <dt scope="row"><?= __('Seat') ?></dt>
            <dd><?= $this->Number->format($ticket->seat) ?></dd>
            <dt scope="row"><?= __('Output') ?></dt>
            <dd><?= h($ticket->output) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
