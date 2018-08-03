# TODO: must include web server
###############################

cmd=""
while (cmd!="quit"):
    cmd = raw_input (">: ");
    with open ("cmd.txt", "w") as f:
        f.write (cmd);
