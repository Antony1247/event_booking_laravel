<html>
<head>
<body>        
<div style="width: 1440px; height: 900px; position: relative; background: #F8F8FA; border-radius: 20px; overflow: hidden">
    <img style="width: 600px; height: 900px; left: 840px; top: 0px; position: absolute" src="image1.jpeg" />
    <div style="width: 600px; height: 900px; left: 840px; top: 0px; position: absolute; background: rgba(19, 19, 21, 0.30)"></div>
    <div style="width: 578px; height: 708px; left: 131px; top: 96px; position: absolute">
      <div style="left: 230px; top: 0px; position: absolute; text-align: center"><span style="color: black; font-size: 24px; font-family: Product Sans; font-weight: 700; word-wrap: break-word">Event</span><span style="color: #7848F4; font-size: 24px; font-family: Product Sans; font-weight: 700; word-wrap: break-word"> Hive</span></div>
      <div style="left: 120px; top: 109px; position: absolute; text-align: center; color: black; font-size: 36px; font-family: Product Sans; font-weight: 700; word-wrap: break-word">Sign In to Event Hive</div>
      <form method="post" action="#">  
        @csrf
      <div style="width: 578px; height: 200px; left: 0px; top: 253px; position: absolute; flex-direction: column; justify-content: center; align-items: center; gap: 40px; display: inline-flex">
        <div style="align-self: stretch; height: 80px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 15px; display: flex">
          <div style="align-self: stretch; color: black; font-size: 16px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">YOUR EMAIL</div>
          <!-- <div style="align-self: stretch; height: 46px; padding: 10px; background: white; border-radius: 5px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
            <div style="color: #687C94; font-size: 12px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">Enter your mail</div>
          </div> -->
          <input type="text" id="email" name="email"  style="align-self: stretch; height: 46px; padding: 10px; background: white; border-radius: 5px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex" required>
        </div>
        <div style="align-self: stretch; height: 80px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 15px; display: flex">
          <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
            <div style="color: black; font-size: 16px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">PASSWORD</div>
            <!-- <div style="color: #7E7E7E; font-size: 16px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">Forgot your password?</div> -->
          </div>
          <!-- <div style="align-self: stretch; height: 46px; padding: 10px; background: white; border-radius: 5px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
            <div style="color: #687C94; font-size: 12px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">Enter your password</div>
          </div> -->
          <input type="password" id="password" name="password" style="align-self: stretch; height: 46px; padding: 10px; background: white; border-radius: 5px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex" required>
        </div>
      </div>
      <!-- <div style="width: 257px; height: 40px; padding-left: 40px; padding-right: 40px; padding-top: 15px; padding-bottom: 15px; left: 161px; top: 503px; position: absolute; background: #7848F4; border-radius: 5px; justify-content: center; align-items: center; gap: 10px; display: inline-flex"> -->
        <!-- <div style="text-align: center; color: white; font-size: 16px; font-family: Product Sans; font-weight: 400; word-wrap: break-word" >Sign In</div> -->
        <button type="submit" style="width: 257px; height: 40px; padding-left: 40px; padding-right: 40px; padding-top: 15px; padding-bottom: 15px; left: 161px; top: 503px; position: absolute; background: #7848F4; border-radius: 5px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">Sign In</button>
      <!-- </div> -->

      <!-- <div style="left: 280px; top: 593px; position: absolute; text-align: center; color: #7E7E7E; font-size: 16px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">Or</div> -->
      <!-- <div style="width: 371px; height: 46px; padding-left: 52px; padding-right: 52px; padding-top: 19px; padding-bottom: 19px; left: 104px; top: 662px; position: absolute; background: white; border-radius: 5px; border: 1px #E0E0E9 solid; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
        <div style="position: relative">
          <div style="width: 23px; height: 23px; left: 0px; top: 0px; position: absolute">
            <div style="width: 11.04px; height: 10.80px; left: 11.50px; top: 9.41px; position: absolute; background: #4285F4"></div>
            <div style="width: 17.89px; height: 9.31px; left: 1.22px; top: 13.68px; position: absolute; background: #34A853"></div>
            <div style="width: 5.07px; height: 10.33px; left: 0px; top: 6.34px; position: absolute; background: #FBBC05"></div>
            <div style="width: 17.97px; height: 9.31px; left: 1.22px; top: -0px; position: absolute; background: #EA4335"></div>
            <div style="width: 23px; height: 23px; left: 0px; top: 0px; position: absolute"></div>
          </div>
          <div style="left: 39px; top: 2.50px; position: absolute; color: #131315; font-size: 16px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">Sign up with Google</div>
        </div>
      </div> -->


    </div>
    <div style="width: 412px; height: 197px; left: 934px; top: 350px; position: absolute">
      <div style="width: 236px; left: 88px; top: 0px; position: absolute; text-align: center; color: white; font-size: 40px; font-family: Product Sans; font-weight: 700; word-wrap: break-word">Hello Friend</div>
      <div style="left: 0px; top: 89px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">To keep connected with us provide us with your information </div>
      <!-- <div style="width: 128px; height: 49px; padding-left: 40px; padding-right: 40px; padding-top: 15px; padding-bottom: 15px; left: 145px; top: 148px; position: absolute; background: rgba(255, 255, 255, 0.40); border-radius: 5px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
        <div style="text-align: center; color: white; font-size: 16px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">Signup</div>
      </div> -->
      <button type="submit" onclick="window.location.href='/userregister'" style="width: 128px; height: 49px; padding-left: 40px; padding-right: 40px; padding-top: 15px; padding-bottom: 15px; left: 145px; top: 148px; position: absolute; background: rgba(255, 255, 255, 0.40); border-radius: 5px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">Sign Up</button>
    </div>
  </div>
</form>
</body>
</head>
</html>

