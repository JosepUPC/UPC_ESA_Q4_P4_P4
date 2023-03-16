/*
practica3.MD 17/3/2021
2 / 4
ESP32 Web Server - STA Mode
modified on 25 MAy 2019
by Mohammadreza Akbari @ Electropeak
https://electropeak.com/learn
*/

#include <WiFi.h>
#include <WebServer.h>
// SSID & Password

const char* ssid = "*****";
const char* password = "*****";

WebServer server(80);

void setup() {

Serial.begin(115200);
Serial.println("Try Connecting to ");
Serial.println(ssid);

WiFi.begin(ssid, password);

while (WiFi.status() != WL_CONNECTED) {

delay(1000);
Serial.print(".");

}
Serial.println("");
Serial.println("WiFi connected successfully");
Serial.print("Got IP: ");
Serial.println(WiFi.localIP());
server.on("/", handle_root);
server.begin();
Serial.println("HTTP server started");
delay(100);

}
void loop() {
server.handleClient();
}

String HTML = "<!DOCTYPE html>\
<html>\
<body>\
<h1>My Primera Pagina con ESP32 - Station Mode &#128522;</h1>\
</body>\
</html>";

void handle_root() {
server.send(200, "text/html", HTML);
}
