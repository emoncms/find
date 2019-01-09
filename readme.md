# emoncms/find

An emoncms module to find OpenEnergyMonitor devices on your local network.

hosted version: https://emoncms.org/find

## Problem
It can sometimes be an difficult finding a emonbase/emonpi on a home network to access the EmonCMS interface, hostname support can be tempremental and its easy to forget the router passwords to access the device list on the router. A network scan can be done using a 3rd party app like [fing](https://play.google.com/store/apps/details?id=com.overlook.android.fing) however this adds another step and complexity.

## Solution
We have created an emoncms module that can be accessed from an existing EmonCMS intallation or from [emoncms.org](https://emoncms.org/find) that can scan the local network for devices with EmonCMS installed.

#### This is done in 2 stages.

1. Read the local IP Address
2. Check every entry on the network for an EmonCMS installation.

The results are shown in a list along with the IP Address and type of device that returned a response. You can click any found device to access it's control panel.

---

### TLDR;
This is written in JavaScript and only ran in the user's browser using a standard API (webRTC). Nothing is transmitted outside the local network.

1. The RTCPeerConnection API allows the browser to open a connection to another ip address. Once this connection is initialised the local ip address can be read. 
> This example shows what is returned by the WebRTC api (https://codepen.io/emrys/full/aPKPzv)

2. Send 253 ajax requests (0.0.0.1 - 0.0.0.254) to every IPv4 address possible in the current subnet testing for responses from an EmonCMS install (eg `http://192.168.1.136/emoncms/describe`). Only correctly formatted responses are displayed in the list, anything else is ignored.

3 different expected types are returned from an EmonCMS installation at the API endpoint `/describe`:-

1. emonpi
2. emonbase
3. emoncms


The module asks for confirmation from the user because it must open another tab changing from `https` to `http`.

This tool does not work using `https` as the local installation of EmonCMS doesn't use TLS to encrypt the communication between the client and server. The ajax requests would fail if done over `https` and no devices would be found.
