import usocket
import socket
from machine import Pin

a = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

a.bind(('', 80))
a.listen(3)


led = Pin(4, Pin.OUT)   --just mention your gpio pin number 


def web_page():

  html =  """
   <a href="/?led=on"><button>Link To ON</button></a>
   <a href="/?led=off"><button>Link To OFF</button></a>"""
  return html


while True:

     conn,adder = a.accept()
     request = conn.recv(1024)
     request = str(request)
     led_on = request.find('/?led=on')
     led_off = request.find('/?led=off')
     if led_on == 6:
        print('LED ON')
        led.value(1)
     if led_off == 6:
        print('LED OFF')
        led.value(0)
     response = web_page()
     conn.sendall (response)
     conn.close()





