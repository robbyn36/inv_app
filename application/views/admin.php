<!-- load header file -->
<?php $this->load->view('header.php'); ?>    
                        <?php $page = $this->uri->segment(3); ?>
                        <?php if ($page == 'form1'): ?>
                            <?php $this->load->view('forms/form1'); ?>
                        <?php else: ?>
                            <h1>Simple Sidebar</h1>
                            <?php var_dump($page); ?>
                            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <?php endif ?>
<?php $this->load->view('footer.php'); ?>