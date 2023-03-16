# Bluetoot Clasic with Arduino, Echange info between ESP32 and Android Smarphone #

## Goals ##

* Get an input form a sensor reading
* Proces the signal and set it to bluetooth output
* let a Android Smartphone get that singal with a coresponding ID. 

## Bluetooth classic with ESP32

* Classic uses the usual standard serial protocols and functions for every board, Arduino and ESP32. 

## Components

### Hardware

* ESP32 Diit Devkit V1 Board
* Android Smartphone with bluetooth
* Led
* 2 Resistor
* temperature sensor
* jumper wires
* Breadboard

### Software

* Arduino libraries
* Programing development software ( like Visual Studio)
* Serial Bluetooth Terminal in your phone (it's and App)
* Windows drivers for ESP32 board

## Connect Serial to Serial Bluetooth

* Frist, we call the bluetoothSerial library

```c
#include "BluetoothSerial.h"
```
* Next check if the bluetooth is enable
```c
#if !defined(CONFIG_BT_ENABLED) || !defined(CONFIG_BLUEDROID_ENABLED)
#error Bluetooth is not enabled! Please run `make menuconfig` to and enable it
#endif
```
* We create a instance BluetoothSerial named [SeiralBT]
```c
BluetoothSerial SerialBT;
```
* In the set up, we initialize a serial comunication and and the Bluethooth serial with a default device called [ESP32Test] by default. 
```c
Serial.begin(115200);
SerialBT.begin("ESP32test"); //Bluetooth device name
Serial.println("el dispositivo a comenzado, ya puedes juntarlo con Bluethooth!");
```
* Next, on the loop, both serials constantly see if there are some date to be write it into the other serial who'll be ready to read them. 
```c
if (Serial.available()) {
  SerialBT.write(Serial.read());
}
if (SerialBT.available()) {
  Serial.write(SerialBT.read());
}
```