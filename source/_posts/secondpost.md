---
extends: _layouts.post
title: Indicating content something
author: Edrick Oliveira
description: Scrolling is something we all know and do on the web to the extent that it’s
date: 2020-11-9
section: contentpost
---

Scrolling is something we all know and do on the web to the extent that it’s an expectation or perhaps even a habit, like brushing our teeth. That’s probably why we don’t put too much thought into designing the scrolling experience — it’s a well-known basic function. In fact, the popular “there is no fold” saying comes from the idea that people know how to scroll and there is no arbitrary line that people don’t go under.
Scroll-based features tend to involve some bespoke concoction of CSS and JavaScript. That’s because there simply aren’t that many native features available to do it. But what if we could accomplish something that only uses CSS?

Take this ingenious horizontal scrollbar with CSS, for instance. I want to do something similar, but to indicate scrolled sections rather than capture continuous scrolling. In other words, rather than increasing the length of the indicator during scroll, I only want to increase the length when a certain section of the page has been reached.

Here’s my plan: Each section carries an indicator that’s undetectable until it reaches the top of the screen. That’s where it becomes visible by changing color and sticks to the top of the viewport.

The exact opposite should happen in reverse: the indicator will follow along when scrolling back up the screen, camouflaging itself back to being undetected to the naked eye.

There are two key parts to this. The first is for the indicator to change color when it’s near the top of the screen. The second is for the indicator to stay put at the top of the screen and come down only when its section is scrolled down to.

The second one is easy to do: we use position: sticky; on our elements. When a page is scrolled, a sticky element sticks to a given position on the screen within its parent container.
