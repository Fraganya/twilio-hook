# Intro
The vision for this project is for it to be an easy and configurable
app developers can use to run a custom webhook.

# Background
Chatbots normally (At least according to my limited knowledge) respond to messages by use of keywords.
This is fine for most use cases but in a situation where you would like to control the flow of user interaction,
(Like in a USSD) this becomes a challenge.

You have to write session management logic to track the user's position in the interaction process. This project seeks to abstract that so the developer can focus on writing the logic.
So basically this project seeks to develop/implement a configurable *chat session management* for chatbots.

# Project Features

At least the project should be able to support the following:

## Core (Minimal Viable Product)
- A developer should be able to setup this project , to some extent i feel that has been covered by the README but can be improved.
- A developer should be able to configure the app to respond to messages based on keywords or in a structured manner (USSD like)
- A developer should be able to setup a configuration of step options and associated methods
- The app should have a user interface/(Web or Mobile App) for the dev/user to monitor usage. basically some analytics.
  
## Future Features
- At some point (In the Future) the dev should be able to write programming logic and configure the steps in a convenient user interface.
- At some point (in the future) the app should be able to act as a hook for various chat bot APIs

So basically this is what is envisioned for the app.

