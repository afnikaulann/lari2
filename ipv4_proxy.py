import socket, threading, select

def handle_client(client_sock):
    try:
        req = b''
        while b'\r\n\r\n' not in req:
            chunk = client_sock.recv(4096)
            if not chunk:
                break
            req += chunk
        
        remote_sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        remote_sock.connect(('20.205.243.166', 443))
        client_sock.sendall(b'HTTP/1.1 200 Connection Established\r\n\r\n')
        
        sockets = [client_sock, remote_sock]
        while True:
            r, _, _ = select.select(sockets, [], [], 60)
            if not r:
                break
            for s in r:
                other = remote_sock if s is client_sock else client_sock
                data = s.recv(32768)
                if not data:
                    return
                other.sendall(data)
    except Exception:
        pass
    finally:
        try:
            client_sock.close()
        except:
            pass

server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
server.bind(('127.0.0.1', 9999))
server.listen(20)
print('IPv4 Tunnel Ready on 127.0.0.1:9999', flush=True)

while True:
    client, _ = server.accept()
    threading.Thread(target=handle_client, args=(client,), daemon=True).start()
