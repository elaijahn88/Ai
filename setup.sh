#!/bin/bash

# Exit on error
set -e

# Define your project name
PROJECT_NAME="Silicon"

echo "📁 Creating React project: $PROJECT_NAME"
npx create-react-app "$PROJECT_NAME"

cd "$Silicon"

echo "📦 Installing video player: react-player"
npm install react-player

echo "✅ Setup complete!"
echo ""
echo "👉 cd $PROJECT_NAME"
echo "👉 npm start"
echo ""
echo "You can now import and use react-player in your app."
