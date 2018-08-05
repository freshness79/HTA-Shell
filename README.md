# HTA-Shell

HTA HTTP based Windows reverse shell 

## Usage

- Edit Port on server.py 
- Edit IP/Port of the server in shell.hta
- Start server.py on your machine
- Start shell.hta on the target machine

Special server side commands:
- remove: shutdown shell.hta (beware, it can't be revamped from server side)
- quit: exit from server.py (this *doesn't* kill shell.hta) 
