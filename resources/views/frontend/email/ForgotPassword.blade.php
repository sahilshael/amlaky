<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
	<body style="font-family:arial">
		<table cellspacing="0" cellpadding="0" width="650px" style="padding: 0;border-collapse:collapse; margin: 0 auto;" border="0">
			<tbody>
				<tr>
					<td height="50"></td>
				</tr>
				<tr>
					<td bgcolor="#b94044">
						<table cellspacing="0" cellpadding="0" width="580px" style="padding: 0;border-collapse:collapse; margin: 35px 15px 35px 35px; "border="0">
							<tbody style="background-color:#f7f7f7; border-bottom:1px solid #eee; text-align:center">
								<tr>
									<td style="text-align:center; background-color:#f7f7f7; padding: 7px 0;">
										<div class="text-center logo-wrap">
		                                	<img src="{{asset('public/frontend/img/Amlaky.png')}}" alt="logo.png" width="250" height="auto">
		                            	</div>
									</td>
								</tr>
								<tr style="height:50px">
									<td>
										<span style="font-size:24px; color:#b94044; font-weight: 600;">Forgot Password</span>
									</td>
								</tr>
								<tr>
									<td>
										<p style="margin-bottom:0px; font-size:18px; font-weight:bold; color: #505050">Hi, <span>{{$name}}</span></p>
										<p style="margin: 9px 30px 40px; line-height:22px; font-size:14px; color: #505050; letter-spacing: 1px;">
											We've received a request to reset your password.<br>
											<br>
											If you didn't make the request, just ignore this email.Otherwise, you can reset your password using this link.
										</p>

									</td>
								</tr>
								<tr>
									<td>								
										<a style="color: #fff; background: #b94044; padding: 10px 14px; text-decoration: none; font-weight: 600" href="{{url('reset-password')}}/<?php echo $id; ?>/<?php echo $random_number;?>">Reset Password</a>
									</td>
								</tr>
								<tr>
									<td>
										<p style="margin: 45px 0 14px; font-size:14px; color:#b94044;">Copyright © <?php echo date('Y'); ?> , MUMTALIKATI. All Rights Reserved. </p>
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