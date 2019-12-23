<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body style="font-family:arial">
<table cellspacing="0" cellpadding="0" width="650px" style="padding: 0;border-collapse:collapse; margin: 0 auto;" border="0">
	<tbody style="background-color: #144499;" >
		<tr style="height:70px">
			<!-- <td style="text-align:center">
				<img src="{{url('public/imgs/quick-logo.png')}}" style="width:250px; height:auto;margin:0 auto;"> 
			</td> -->
		</tr>
		<tr>
			<td>
				<table cellspacing="0" cellpadding="0" width="580px" style="padding: 0;border-collapse:collapse; margin: 35px 15px 0px 35px; "border="0">
					<tbody style="background-color:#fff; border-bottom:1px solid #eee; text-align:center">
						<tr>
							<td style="text-align:center; background-color:#5dbedb" >
								<div class="text-center logo-wrap">
                                	<img src="{{url('public/assets/images/unilife-icon.png')}}" alt="logo.png" width="80px" height="80px">
                            	</div>
							</td>
						</tr>
						<tr style="height:50px">
							<td>
								<span style="font-size:24px; color:#784f1d;">Forgot Password</span>
							</td>
						</tr>
						

						<tr>
							<td>
								<p style="margin-bottom:0px; font-size:18px; font-weight:bold">Hi <?php echo $name; ?></p>
								<p style="padding: 0 30px; margin-top:8px; line-height:22px; font-size:14px">
									It look like you requested a new password.<br>
									<br>
									If thats sounds right, you can enter new password by clicking on the link below. 
								</p>

								<a style="color: blue;" href="{{url('admin-reset-password')}}/<?php echo $id; ?>/<?php echo $random_number;?>">Reset Password</a>
							</td>
						</tr>
						
						
						<tr >
							<td>
								<p style="font-size:14px; color:#784f1d;">Copyright © <?php echo date('Y'); ?> , MUMTALIKATI. All Rights Reserved. </p>
							</td>
						</tr>
					</tbody>	
				</table>
			</td>
		</tr>
	</tbody>	
</table>
</body>
</html>