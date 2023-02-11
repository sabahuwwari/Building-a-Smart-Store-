 #include <SPI.h>
 #include <LiquidCrystal.h>
 #include "DHT.h"

 /*PIR Var*/
int led = 13;                
int sensor = A4;              
int state = LOW;             
int val = 0;        

/*Ultrasonic Var*/
 #define echoPin A3 
#define trigPin A2 
long duration; 
int distance; 
         

/*Humidity Var*/
#define DHTPIN A5 
#define DHTTYPE DHT11 
DHT dht(DHTPIN, DHTTYPE);

/*Gas Var*/
int LED1 = 12;
int LED2 = 11;
int smokeA0 = A0;
int sensorThreshold = 200;


void setup() {
  
/*PIR*/
  pinMode(led, OUTPUT);      
  pinMode(sensor, INPUT);    
  Serial.begin(9600);
  
/*Ultrasonic*/
 pinMode(trigPin, OUTPUT); 
  pinMode(echoPin, INPUT); 
  Serial.begin(9600); 
  Serial.println("Ultrasonic Sensor Test"); 
  Serial.println("Start Test");

  /*Humidity*/
 Serial.begin(9600);
   Serial.println("DHT test!");
   dht.begin();

   /*Gas*/
   pinMode(LED1, OUTPUT);
   pinMode(LED2, OUTPUT);
   pinMode(smokeA0, INPUT);
   Serial.begin(9600);
}

void loop(){

/*PIR Var*/
  val = digitalRead(sensor);   
  if (val == HIGH) {           
    digitalWrite(led, HIGH);   
    delay(500);                
    
    if (state == LOW) {
      Serial.println("Motion detected!"); 
      state = HIGH;       
    }
  } 
  else {
      digitalWrite(led, LOW); 
      delay(500);             
      if (state == HIGH){
        Serial.println("Motion stopped!");
        state = LOW;      
    }
  }

  /*Ultrasonic*/
   digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  duration = pulseIn(echoPin, HIGH);
  distance = duration * 0.034 / 2; 
  Serial.print("Distance: ");
  Serial.print(distance);
  Serial.println(" cm");

/*Humidity*/

 delay(2000); 
   float h = dht.readHumidity();
   float t = dht.readTemperature();
   float f = dht.readTemperature(true);
   if (isnan(h) || isnan(t) || isnan(f)) {
      Serial.println("Failed to read from DHT sensor!");
      return;
   }
   
   float hif = dht.computeHeatIndex(f, h);
   float hic = dht.computeHeatIndex(t, h, false);
   Serial.print ("Humidity: ");
   Serial.print (h);
   Serial.print (" %\t");
   Serial.print ("Temperature: ");
   Serial.print (t);
   Serial.print (" *C ");
   Serial.print (f);
   Serial.print (" *F\t");
   Serial.print ("Heat index: ");
   Serial.print (hic);
   Serial.print (" *C ");
   Serial.print (hif);
   Serial.println (" *F");


   /*Gas*/

   int analogSensor = analogRead(smokeA0);

Serial.print("Pin A0: ");
Serial.println(analogSensor);
if (analogSensor > sensorThreshold)
{
digitalWrite(LED1, HIGH);
digitalWrite(LED2, LOW);
Serial.println("Danger!Gas is Upnormal!");
}
else
{
digitalWrite(LED1, LOW);
digitalWrite(LED2, HIGH);
Serial.println("Gas is Normal");

}
delay(100);

}
