# The Quest of Love

The **Quest of Love** app is a mission-based to-do list designed with a retro RPG aesthetic. In this game-like setup, the girlfriend plays the **NPC (Quest Giver)** and the boyfriend is the **Hero (Player)**.

## Key Features

- **Role-based UI:** Choose to play as the NPC (assign quests) or as the Player (complete quests).
- **Real-time updates:** Quests appear instantly on the player's screen using WebSockets.
- **RPG aesthetic:** Pixel-art fonts (`Press Start 2P` and `VT323`), typewriter-style animations, and classic quest log layouts.
- **Quest rewards:** NPCs can define custom rewards (for example, `A big hug` or `100 Kisses`) for each mission.
- **Persistence:** All missions are stored in a local SQLite database.

## How to Use

### 1) Open the app

You will be prompted to choose your role.

### 2) NPC flow (Girlfriend)

1. Fill out the **Create New Quest** form with a title, description, and reward.
2. Click **Post Quest** to send it to the Hero.
3. Monitor active quests and delete them if needed.

### 3) Player flow (Boyfriend)

1. View active quests on the quest board.
2. Click **Complete** to claim the reward or **Fail** if the quest was too difficult.
3. Track progress with the **Completed Quests** counter.

## Technical Details

- **Backend:** Express server with `better-sqlite3` for storage and `ws` for real-time communication.
- **Frontend:** React with Tailwind CSS and Motion for smooth game-like animations.
- **Styling:** Custom RPG-themed CSS components (`rpg-box`, `rpg-button`) for a consistent visual style.
