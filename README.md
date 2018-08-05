# HTA-Shell

HTA HTTP based Windows reverse shell 

## Usage

- Edit Port on server.py 
- Edit IP/Port of the server in client.hta
- Start server.py on your machine
- Start client.hta on the target machine

Special server side commands:
- remove: shutdown client.hta (beware, it can't be revamped from server side)
- quit: exit from server.py (this *doesn't* kill client.hta) 