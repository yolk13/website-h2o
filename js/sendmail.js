function sendEmail() {
  Email.send({
  Host: "smtp.gmail.com",
  Username : "info.voberry@gmail.com",
  Password : "hamropassword@voberry1",
  To : 'info.voberry@gmail.com',
  From : "hsageyolk@gmail.com",
  Subject : "Test",
  Body : "This is a Test",
  Attachments : [
  	{
  		name : "smtpjs.png",
  		path:"https://networkprogramming.files.wordpress.com/2017/11/smtpjs.png"
  	}]
  }).then(
  	message => alert("mail sent successfully")
  );
}