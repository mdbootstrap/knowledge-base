function isAppleDevice() {
  return (
    [
      "iPad Simulator",
      "iPhone Simulator",
      "iPod Simulator",
      "iPad",
      "iPhone",
      "iPod",
    ].includes(navigator.platform) ||
    // iPad on iOS 13 detection
    (navigator.userAgent.includes("Mac") && "ontouchend" in document)
  );
}

/*
The list 
Source: https://stackoverflow.com/questions/19877924/what-is-the-list-of-possible-values-for-navigator-platform-as-of-today
Author: https://stackoverflow.com/users/1854499/robbert

Below is a (definitely non-definite) list of the values I know of that I could verify with multiple sources. Because of the vague definition


Android

It's really hard to test for Android devices. Android devices will return Android just as often as some version of Linux. For example on a Nexus 5 phone, both the Android browser and Chrome return Linux armv7l. In rare cases Android devices can even return null (instead of undefined).

-Android (2008)
-Linux: see notes above
-null

Apple

As far as iOS goes: Safari, Chrome and Mercury agree, but Opera messes things up.

-iPhone (2007)
-iPod (2007)
-iPad (2010)
-iPhone Simulator: simulator shipped with Xcode
-iPod Simulator: simulator shipped with Xcode
-iPad Simulator: simulator shipped with Xcode
-Macintosh
-MacIntel: Intel processor (2005)
-MacPPC: PowerPC processor
-Mac68K: 68000 processor
-Pike v7.6 release 92: Opera Mini 5 on any iPhone (2009)
-Pike v7.8 release 517: Opera Mini 7 on any iPhone (2012)

BlackBerry

-BlackBerry (2003)

FreeBSD

-FreeBSD
-FreeBSD i386: x86 (IA-32) processor
-FreeBSD amd64: AMD x86-64 processor

Linux

Seriously unreliable because so many platforms are built on this. For example, Chrome on ChromeOS or Linux x86-64 both return Linux i686 as that's what they were compiled for.

Note Linux ARM lists architecture flags, e.g. armv5tej would denote a v5 ARM architecture with Thumb support ('T'), a DSP instruction set ('E'), and Jazelle support ('J').

-Linux
-Linux aarch64
-Linux armv5tejl
-Linux armv6l
-Linux armv7l
-Linux armv8l
-Linux i686
-Linux i686 on x86_64
-Linux i686 X11: based on X11 Window System
-Linux MSM8960_v3.2.1.1_N_R069_Rev:18: Sony Xperia V
-Linux ppc64
-Linux x86_64
-Linux x86_64 X11: based on X11 Window System

Microsoft

Even on a 64-bit Windows 8 they all stick to Win32.

-OS/2 (1994†)
-Pocket PC
-Windows
-Win16: Windows 3.1x (1992†)
-Win32: Windows 95 and up
-WinCE

Mozilla (Firefox OS)

An empty string is returned in the web browser on Firefox OS. See this bug report.


Nintendo

-New Nintendo 3DS (2014)
-Nintendo DSi (2008)
-Nintendo 3DS (2011)
-Nintendo Wii (2006)
-Nintendo WiiU (2012)

OpenBSD

-OpenBSD amd64

Symbian / S40

-Nokia_Series_40 (1999†)
-S60 (2002†)
-Symbian: Opera on Symbian
-Symbian OS

Palm

-PalmOS (1996)
-webOS (2009)

Solaris

-SunOS
-SunOS i86pc
-SunOS sun4u: SPARC processor

Sony

-PLAYSTATION 3 (2006)
-PlayStation 4 (2013)
-PSP: PlayStation Portable (2004)

Various

-HP-UX: Hewlett-Packard UniX
-masking-agent: value changes to this when using Masking Agent for Firefox
-WebTV OS
-X11: X11 Window System
*/
