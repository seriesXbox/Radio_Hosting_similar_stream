#Stream_Similar_Radio_Hosting
An internet radio hosted on a regular web hosting service, without the ability to install applications such as Icecast or Shoutcast. It operates solely using PHP and JS, attempting a simulation I've titled "Audio Stream Simulation".

In this script, I've applied a model and named it "AUDIO STREAM SIMULATION TIME SERVER" ASSTS. While the audio is playing, each listener is playing the exact same track at the exact same time.

I believe the project is innovative, and I plan on further development. Its operation is fairly straightforward, but issues may occur.

Here's how it works:
(current data is temporarily saved in JSON)
The server begins playing a track which is being recorded (Track name), then logs the moment the track is saved (start time of the track, 'current server time') along with the track duration (for now, I've assumed a value of 180 seconds, but I will be updating the script introducing getId3).

As more listeners join, the script launches the track with that name and forwards the playback to the moment elapsed since the track started, calculating server time. This creates a streaming effect as everyone listens to the same moment of the track simultaneously.

My model (AUDIO STREAM SIMULATION TIME SERVER) ASSTS will be updated to:

1- Getid3 (file time synchronization),
2- Attempt to reduce and even out delays (since each listener has a different connection and delays may occur.)

3- An additional advanced feature for generating playlist tracks, which will not be repetitive. (possibility to upload sets)

4- Automatic switching if a user is broadcasting a stream from their computer using software like "BroadWave"
(the script will connect with the live stream and, after the broadcast ends, will switch back to the radio from the server)

5- Automatic first track selection by the server!

I think that running such a service on an ordinary file server (hosting server) is a very cheap solution due to the low cost of the server or free!.
You don't need dedicated servers or a 24/7 computer. The effect of the stream is with a little delay but I will work on it.

This is my first preliminary model which will be improved soon.
