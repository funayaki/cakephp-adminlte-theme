<%
use Cake\Utility\Inflector;

   $extras = [];
%>
<?php $this->assign('subtitle', '<%= Inflector::humanize($action) %>'); ?>

<?php $this->Breadcrumbs->add(__('<%= $pluralHumanName %>'), ['action' => 'index']); ?>
<?php $this->Breadcrumbs->add(__('<%= Inflector::humanize($action) %>')); ?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($<%= $singularVar %>, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
<%
    foreach ($fields as $field) {
      if (in_array($field, $primaryKey)) {
        continue;
      }
      if (isset($keyFields[$field])) {
        $fieldData = $schema->column($field);
        if (!empty($fieldData['null'])) {
%>
            echo $this->Form->input('<%= $field %>', ['options' => $<%= $keyFields[$field] %>, 'empty' => true]);
<%
        } else {
%>
            echo $this->Form->input('<%= $field %>', ['options' => $<%= $keyFields[$field] %>]);
<%
        }
        continue;
      }
      if (!in_array($field, ['created', 'modified', 'updated'])) {
        $fieldData = $schema->column($field);
        if (($fieldData['type'] === 'date')) {
            $extras[] = 'datepicker';
%>
            echo $this->Form->input('<%= $field %>', ['empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text']);
<%
        } else {
%>
            echo $this->Form->input('<%= $field %>');
<%
        }
      }
    }
    if (!empty($associations['BelongsToMany'])) {
      foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
%>
            echo $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>]);
<%
      }
    }
%>
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Submit')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

<%
    if (!empty($extras)) {
        foreach($extras as $element) {
        %>
        <% echo $this->element($element); %>
        <%
        }
    }
%>
