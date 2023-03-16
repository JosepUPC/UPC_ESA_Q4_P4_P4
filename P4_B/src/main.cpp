//This example code is in the Public Domain (or CC0 licensed, at your option.)
//By Evandro Copercini - 2018
//
//This example creates a bridge between Serial and Classical Bluetooth (SPP)
//and also demonstrate that SerialBT have the same functionalities of a normal Serial

#include "BluetoothSerial.h"
#include "Arduino.h"

#if !defined(CONFIG_BT_ENABLED) || !defined(CONFIG_BLUEDROID_ENABLED)
#error Bluetooth is not enabled! Please run `make menuconfig` to and enable it
#endif

BluetoothSerial SerialBT;

void LedTask(void * parameter );
const int Number1=25, Number2=13;
bool state_LED1=false, state_LED2=false;
String messatge;
char Nextchar;


void setup() {
  Serial.begin(115200);
  pinMode(Number1,OUTPUT);
  pinMode(Number2,OUTPUT);

  xTaskCreate
  (
    LedTask,
    "Led Task",
    20000,
    NULL,
    1,
    NULL
  );

  SerialBT.begin("ESP32test"); //Bluetooth device name
  Serial.println("El dispositivo arranco, Ahora puedes unirlo a Bluetooth!");
}

void loop() {
  if (SerialBT.available()) {
    Nextchar=SerialBT.read();
    if(Nextchar!='\n')
      messatge += String(Nextchar);
    else
      messatge="";
    Serial.write(Nextchar);
  }
  delay(20);
}
void LedTask(void * parameter ){

  for (;;){
      if(messatge="LED1"){
        if(state_LED1){
          digitalWrite(Number1 , HIGH);
          state_LED1=true;
        }
        else 
          digitalWrite(Number1 , LOW);
          state_LED1=false;
      }
      else if(messatge="LED2"){
        if(state_LED2){
          digitalWrite(Number2 , HIGH);
          state_LED1=true;
          }
        else {
          digitalWrite(Number2 , LOW);
          state_LED1=false;
        }
      }
      else if(messatge="LED_ON"){
        digitalWrite(Number1 , HIGH);
        state_LED1=true;
        digitalWrite(Number2 , HIGH);
        state_LED2=true;
      }
      else if(messatge="LED_OFF"){
        digitalWrite(Number1 , LOW);
        state_LED1=false;
        digitalWrite(Number2 , LOW);
        state_LED2=false;
      }
      else{}
      
      delay(20)
  }

  vTaskDelete( NULL );
}