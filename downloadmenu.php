<ul class="dropdown-menu">
										<li>
											<div class="mega-menu-content">
												<div class="row">
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">CS Foundation</span>
																<ul class="sub-menu">
																	
																	<?php
																	include_once("./config.php");
																	$query="select * from quiz_subject_name WHERE course_name='CS Foundation'";
                                               						   $result=mysql_query($query);
                                              					    while($row=mysql_fetch_array($result)){
																	?>
																	<li><a href="./download_cs_foundation.php#<?php echo $row[1]; ?>"><?php echo $row[1];?></a></li>
																	<?php } ?>
                                                                    
                                                                 </ul>
															</li>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">CS Executive</span>
																<ul class="sub-menu">
																	
																	<?php $query1="select * from quiz_subject_name WHERE course_name='CS Executive'";
                                               						   $result1=mysql_query($query1);
                                              					    while($row1=mysql_fetch_array($result1)){ ?>
																	<li><a href="./download_cs_executive.php#<?php echo $row1[1]; ?>"><?php echo $row1[1];?></a></li>
																	<?php }?>
                                                                   </ul>
															</li>
														</ul>
													</div>
													<div class="col-md-3">
														<ul class="sub-menu">
															<li>
																<span class="mega-menu-sub-title">CS Professional</span>
																
																<ul class="sub-menu">
																	
																	<?php $query2="select * from quiz_subject_name WHERE course_name='CS Professional'";
                                               						   $result2=mysql_query($query2);
                                              					    while($row2=mysql_fetch_array($result2)){ ?>
																	<li><a href="./download_cs_professional.php#<?php echo $row2[1]; ?>"><?php echo $row2[1];?></a></li>
																	<?php }?>
                                                                   </ul>
																
																
															</li>
														
														</ul>
													</div>
													
													
												</div>
											</div>
										</li>
									</ul>