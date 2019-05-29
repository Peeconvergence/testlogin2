 <?php 
                                      
                                       include 'connectdb.php';
                                       $sql ="SELECT*FROM users ";
                                       $usersw = mysqli_query($dbcon, $sql);
                                       while($users = mysqli_fetch_assoc($usersw )){ ?>
                                       
                                  <h4 class="card-title"><?php echo $users['firstname'].'&nbsp&nbsp'.$users['lastname'] ;?></h4>
                                    <ul class="list-inline list-inline-pipe">
                                        <li><?php echo $users['email'];?></li>
                                        
                                    </ul>
                                    <h6 class="card-subtitle text-muted">Managing Director</h6>
                                             





                      <?php  } ?>