import smtplib
import email.utils
import sys

toaddr = sys.argv[1];
order_id = sys.argv[2];
status = int(sys.argv[3]);

if status == 1:
  body = f"Your order(Order number {order_id}) placed on health maniac has been confirmed.";
else:
  body = f"Your order(Order number {order_id}) placed on health maniac has been cancelled due to unavailability";

msg = f"Subject: About your order\n\n{body}"
fromaddr = "officialhealthmaniac@gmail.com"

server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
server.login(fromaddr, "Qwe321qwe321")
server.sendmail(fromaddr, toaddr, msg)

server.quit()
