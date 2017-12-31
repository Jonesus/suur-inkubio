<?php
  $docs_directory = wp_upload_dir()['basedir'] . '/dokumentit';
  $docs_url = wp_upload_dir()['baseurl'] . '/dokumentit';
  $files = directory_to_array($docs_directory);
  $keys = array_reverse(array_keys($files));
  $i = 0;
?>

<ul class="folding-list" id="documentaccordion2">
  <?php foreach ($keys as $year) : ?>

    <li class="folding-item">
      <a class="<?php echo ($i == 0) ? '' : 'collapsed' ?>" data-toggle="collapse" data-parent="#documentaccordion" href="#documentcollapse<?php echo $i ?>">
        <i class="fa fa-fw fa-chevron-down"></i>
        <?php echo $year; ?>
      </a>
      <div class="collapse <?php echo ($i == 0) ? 'show' : '' ?>" id="documentcollapse<?php echo $i ?>">
        <?php foreach ($files[$year] as $folder => $docs) : ?>
          <?php $folder_parts = explode('-', $folder);
            $pk = array_pop($docs); ?>
          <div class="document-top">

            <?php if (is_numeric($folder_parts[1])) {
              echo __('Hallituksen kokous ', 'suurinkubio').$folder_parts[1].'/'.$year;
            } elseif (starts_with($folder_parts[1], 'vuosikokous')) {
              echo __('Vuosikokous', 'suurinkubio');
            } elseif (starts_with($folder_parts[1], 'vaalikokous')) {
              echo __('Vaalikokouskokous', 'suurinkubio');
            } elseif (starts_with($folder_parts[1], 'yhdistys')) {
              echo __('Yhdistyksen ylimääräinen kokous ', 'suurinkubio').$folder_parts[2];
            } ?>

            <a href="<?php echo $docs_url.'/'.$year.'/'.$folder.'/'.$pk; ?>"> (pdf)</a>
          </div>

          <ul class="document-list">
            <?php foreach ($docs as $file) : 
              if (ends_with($file, '.pdf')) :?>
                <li class="document-item">
                  <?php echo __('Liite ', 'suurinkubio').substr($file, -6, 2); ?>
                  <a href="<?php echo $docs_url.'/'.$year.'/'.$folder.'/'.$file; ?>">(pdf)</a>
                </li>            
              <?php endif ; ?>
            <?php endforeach ; ?>
          </ul>
          
        <?php endforeach ; ?>
      </div>
    </li>

  <?php $i++; ?>
<?php endforeach ; ?>
</ul>