var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
    service: "gmail",
    auth: {
        user: "myemailid",
        pass: "password"
    }
});

var mailOptions = {
    from: "myemailid",
    to: "youremailid",
    subject: "Nodemailer test",
    text: "Test mail sent from nodejs"
};

transporter.sendMail(mailOptions, function (err, info) {
    if (err) console.log(err);
    else {
        console.log("Success" + info);
    }
});