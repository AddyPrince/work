<div class="card">
              <div class="card-header">
                <h3 class="card-title">Contact Us</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                <tr  class="text-center">
                    <th>No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i=1; $i < 9 ; $i++) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>Lorem, ipsum.</td>
                    <td>088-888-8888</td>
                    <td>Test@test</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ad maxime quas esse ipsa exercitationem praesentium hic numquam dignissimos quia?</td>
                    <td>1/12/2018</td>
                </tr>
                <?php } ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>