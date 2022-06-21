
from email import message
from mailConfig import login, password
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

msg = MIMEMultipart()
to_email = 'alpysbaj2003bahytzhan@gmail.com'# Почта получателя

message = 'Сообщение через питон'

msg.attach(MIMEText(message, 'plain'))

server = smtplib.SMTP('smtp.gmail.com', 465)
server.starttls()
server.login(login, password)
server.sendmail(login, to_email, msg.as_string())
server.quit()