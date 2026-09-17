@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/about.css" />
<style>
.main-banner-pages img {
    object-position: bottom !important;
}

.project-objectives-section {
    padding: 90px 0;
    background: #f7f9f6;
}

.objectives-heading {
    max-width: 700px;
    margin: 0 auto;
}

.objectives-label {
    display: inline-block;
    margin-bottom: 12px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    color: rgb(117, 172, 57);
}

.objectives-heading h2 {
    margin-bottom: 15px;
    font-size: 42px;
    font-weight: 700;
    color: #153b50;
}

.objectives-heading h2 span {
    color: rgb(117, 172, 57);
}

.objectives-heading p {
    margin: 0;
    color: #6b777d;
    font-size: 16px;
    line-height: 1.7;
}


/* Card */

.objective-card {
    position: relative;
    height: 100%;
    padding: 35px 30px 30px;
    background: #ffffff;
    border: 1px solid #e8eee9;
    border-radius: 18px;
    overflow: hidden;
    transition: all 0.35s ease;
}

.objective-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: rgb(117, 172, 57);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.35s ease;
}

.objective-card:hover {
    transform: translateY(-8px);
    border-color: rgba(117, 172, 57, 0.3);
    box-shadow: 0 18px 45px rgba(21, 59, 80, 0.10);
}

.objective-card:hover::before {
    transform: scaleX(1);
}


/* Number */

.objective-number {
    position: absolute;
    top: 18px;
    right: 22px;
    font-size: 45px;
    line-height: 1;
    font-weight: 800;
    color: #eef3ef;
    transition: color 0.35s ease;
}

.objective-card:hover .objective-number {
    color: #e4eedf;
}


/* Icon */

.objective-icon {
    width: 58px;
    height: 58px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    background: rgba(117, 172, 57, 0.11);
    color: rgb(117, 172, 57);
    font-size: 25px;
    transition: all 0.35s ease;
}

.objective-card:hover .objective-icon {
    background: rgb(117, 172, 57);
    color: #ffffff;
    transform: scale(1.05);
}


/* Content */

.objective-card h4 {
    margin-bottom: 12px;
    color: #153b50;
    font-size: 20px;
    font-weight: 700;
}

.objective-card p {
    margin: 0;
    color: #68767d;
    font-size: 15px;
    line-height: 1.75;
}


/* Wide Cards */

.objective-card-wide {
    min-height: 100%;
}


/* Responsive */

@media (max-width: 991px) {
    .project-objectives-section {
        padding: 70px 0;
    }

    .objectives-heading h2 {
        font-size: 36px;
    }
}

@media (max-width: 575px) {
    .project-objectives-section {
        padding: 55px 0;
    }

    .objectives-heading h2 {
        font-size: 30px;
    }

    .objective-card {
        padding: 30px 25px 25px;
    }

    .objective-number {
        font-size: 38px;
    }
}
</style>


<style>
    .project-components-section {
    padding: 100px 0;
    background: #ffffff;
}


/* Header */

.components-header {
    display: flex;
    align-items: end;
    justify-content: space-between;
    gap: 40px;
    margin-bottom: 70px;
}

.components-tag {
    display: block;
    margin-bottom: 12px;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    color: rgb(117, 172, 57);
}

.components-header h2 {
    margin: 0;
    font-size: 44px;
    font-weight: 750;
    color: #153b50;
}

.components-header h2 span {
    color: rgb(117, 172, 57);
}

.components-header > p {
    max-width: 430px;
    margin: 0 0 3px;
    color: #718087;
    font-size: 16px;
    line-height: 1.7;
}


/* Component */

.component-item {
    position: relative;
    display: flex;
    align-items: stretch;
    min-height: 245px;
    margin-bottom: 30px;
    border-radius: 22px;
    background: #f7f9f6;
    overflow: hidden;
    transition: all 0.35s ease;
}

.component-item:hover {
    transform: translateX(8px);
    box-shadow: 0 18px 45px rgba(21, 59, 80, 0.10);
}


/* Number */

.component-index {
    width: 150px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #153b50;
}

.component-index span {
    font-size: 54px;
    font-weight: 800;
    color: rgba(255, 255, 255, 0.14);
}


/* Content */

.component-content {
    display: flex;
    align-items: center;
    gap: 32px;
    padding: 42px 50px;
    flex: 1;
    border-left: 5px solid rgb(117, 172, 57);
}

.component-icon {
    width: 78px;
    height: 78px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    background: #ffffff;
    color: rgb(117, 172, 57);
    font-size: 34px;
    box-shadow: 0 8px 25px rgba(21, 59, 80, 0.08);
    transition: all 0.35s ease;
}

.component-item:hover .component-icon {
    background: rgb(117, 172, 57);
    color: #ffffff;
    transform: rotate(-5deg) scale(1.05);
}


/* Text */

.component-small-title {
    display: block;
    margin-bottom: 8px;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.8px;
    color: rgb(117, 172, 57);
}

.component-text h3 {
    margin-bottom: 12px;
    font-size: 25px;
    font-weight: 700;
    color: #153b50;
}

.component-text p {
    max-width: 850px;
    margin: 0;
    color: #68767d;
    font-size: 15px;
    line-height: 1.8;
}


/* Alternating Accent */

.component-reverse .component-content {
    border-left: 0;
    border-right: 5px solid rgb(117, 172, 57);
}

.component-reverse .component-index {
    order: 2;
}

.component-reverse .component-content {
    order: 1;
}


/* Bottom spacing */

.component-item:last-child {
    margin-bottom: 0;
}


/* Responsive */

@media (max-width: 991px) {

    .project-components-section {
        padding: 75px 0;
    }

    .components-header {
        display: block;
        margin-bottom: 50px;
    }

    .components-header h2 {
        font-size: 38px;
        margin-bottom: 15px;
    }

    .components-header > p {
        max-width: 600px;
    }

    .component-index {
        width: 110px;
    }

    .component-content {
        padding: 35px;
    }
}


@media (max-width: 767px) {

    .project-components-section {
        padding: 60px 0;
    }

    .components-header h2 {
        font-size: 32px;
    }

    .component-item {
        display: block;
    }

    .component-index {
        width: 100%;
        height: 75px;
        justify-content: flex-start;
        padding-left: 28px;
    }

    .component-index span {
        font-size: 38px;
    }

    .component-content,
    .component-reverse .component-content {
        display: block;
        padding: 30px 25px;
        border-left: 0;
        border-right: 0;
        border-top: 4px solid rgb(117, 172, 57);
    }

    .component-icon {
        margin-bottom: 22px;
    }

    .component-text h3 {
        font-size: 21px;
    }

    .component-item:hover {
        transform: translateY(-5px);
    }

    .component-reverse .component-index {
        order: initial;
    }

    .component-reverse .component-content {
        order: initial;
    }
}
</style>

<style>
    .schools-covered-section {
    padding: 100px 0;
    background: #f7f9f6;
}


/* Header */

.schools-header {
    max-width: 750px;
    margin: 0 auto;
}

.schools-label {
    display: inline-block;
    margin-bottom: 12px;
    color: rgb(117, 172, 57);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
}

.schools-header h2 {
    margin-bottom: 15px;
    color: #153b50;
    font-size: 42px;
    font-weight: 750;
}

.schools-header h2 span {
    color: rgb(117, 172, 57);
}

.schools-header p {
    margin: 0;
    color: #6d7b82;
    font-size: 16px;
    line-height: 1.75;
}


/* School Card */

.school-card {
    position: relative;
    height: 100%;
    padding: 28px;
    background: #ffffff;
    border: 1px solid #e4ebe5;
    border-radius: 22px;
    overflow: hidden;
    transition: all 0.35s ease;
}

.school-card::after {
    content: "";
    position: absolute;
    width: 100px;
    height: 100px;
    right: -45px;
    bottom: -45px;
    border-radius: 50%;
    background: rgba(117, 172, 57, 0.07);
    transition: all 0.4s ease;
}

.school-card:hover {
    transform: translateY(-9px);
    border-color: rgba(117, 172, 57, 0.35);
    box-shadow: 0 20px 50px rgba(21, 59, 80, 0.11);
}

.school-card:hover::after {
    width: 180px;
    height: 180px;
}


/* Top */

.school-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
}

.school-number {
    color: #153b50;
    font-size: 25px;
    font-weight: 800;
}

.school-location {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 11px;
    border-radius: 30px;
    background: rgba(117, 172, 57, 0.10);
    color: rgb(117, 172, 57);
    font-size: 11px;
    font-weight: 700;
}

.school-location i {
    font-size: 11px;
}


/* Icon */

.school-icon {
    width: 62px;
    height: 62px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 22px;
    border-radius: 17px;
    background: #153b50;
    color: #ffffff;
    font-size: 27px;
    transition: all 0.35s ease;
}

.school-card:hover .school-icon {
    background: rgb(117, 172, 57);
    transform: rotate(-4deg);
}


/* School Name */

.school-card h3 {
    min-height: 58px;
    margin-bottom: 18px;
    color: #153b50;
    font-size: 20px;
    line-height: 1.4;
    font-weight: 700;
}


/* Address */

.school-address {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    color: #69777e;
    font-size: 14px;
    line-height: 1.65;
}

.school-address i {
    flex-shrink: 0;
    margin-top: 3px;
    color: rgb(117, 172, 57);
    font-size: 16px;
}


/* Divider */

.school-divider {
    width: 100%;
    height: 1px;
    margin: 24px 0;
    background: #e9eeea;
}


/* Head */

.school-info {
    display: flex;
    align-items: center;
    gap: 13px;
}

.info-icon {
    width: 43px;
    height: 43px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #f0f5ef;
    color: rgb(117, 172, 57);
    font-size: 18px;
}

.school-info small {
    display: block;
    margin-bottom: 3px;
    color: #9aa5a9;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 1.2px;
}

.school-info strong {
    display: block;
    color: #153b50;
    font-size: 14px;
    font-weight: 700;
}

.school-info span {
    display: block;
    color: #78858b;
    font-size: 12px;
    margin-top: 2px;
}


/* Stats */

.school-stats {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 45px;
    margin-top: 55px;
    padding: 25px 35px;
    background: #153b50;
    border-radius: 18px;
}

.school-stat {
    display: flex;
    align-items: center;
    gap: 13px;
}

.stat-icon {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.10);
    color: rgb(117, 172, 57);
    font-size: 20px;
}

.school-stat strong {
    display: block;
    color: #ffffff;
    font-size: 20px;
    font-weight: 750;
}

.school-stat span {
    display: block;
    color: rgba(255, 255, 255, 0.65);
    font-size: 11px;
    margin-top: 2px;
}

.stat-line {
    width: 1px;
    height: 40px;
    background: rgba(255, 255, 255, 0.15);
}


/* Responsive */

@media (max-width: 991px) {

    .schools-covered-section {
        padding: 75px 0;
    }

    .schools-header h2 {
        font-size: 36px;
    }

    .school-stats {
        gap: 25px;
    }
}


@media (max-width: 767px) {

    .schools-covered-section {
        padding: 60px 0;
    }

    .schools-header h2 {
        font-size: 31px;
    }

    .school-card h3 {
        min-height: auto;
    }

    .school-stats {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
        padding: 25px;
    }

    .stat-line {
        width: 100%;
        height: 1px;
    }
}
</style>

<style>
    .implementation-methodology {
    padding: 100px 0;
    background: #ffffff;
}


/* Heading */

.method-heading {
    max-width: 720px;
    margin: 0 auto 75px;
}

.method-heading > span {
    display: inline-block;
    margin-bottom: 12px;
    color: rgb(117, 172, 57);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
}

.method-heading h2 {
    margin-bottom: 15px;
    color: #153b50;
    font-size: 43px;
    font-weight: 700;
}

.method-heading h2 strong {
    color: rgb(117, 172, 57);
    font-weight: 700;
}

.method-heading p {
    margin: 0;
    color: #718087;
    font-size: 16px;
    line-height: 1.75;
}


/* Timeline */

.method-timeline {
    position: relative;
    max-width: 1050px;
    margin: 0 auto;
}


/* Vertical Line */

.method-timeline::before {
    content: "";
    position: absolute;
    top: 25px;
    bottom: 25px;
    left: 35px;
    width: 2px;
    background: #e4ebe5;
}


/* Step */

.method-step {
    position: relative;
    display: flex;
    align-items: flex-start;
    gap: 30px;
    margin-bottom: 28px;
}

.method-step:last-child {
    margin-bottom: 0;
}


/* Number Circle */

.method-dot {
    position: relative;
    z-index: 2;
    width: 72px;
    height: 72px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 7px solid #ffffff;
    border-radius: 50%;
    background: rgb(117, 172, 57);
    box-shadow: 0 5px 18px rgba(117, 172, 57, 0.22);
}

.method-dot span {
    color: #ffffff;
    font-size: 15px;
    font-weight: 800;
}


/* Card */

.method-card {
    flex: 1;
    display: flex;
    align-items: flex-start;
    gap: 25px;
    padding: 28px 32px;
    border: 1px solid #e7ece8;
    border-radius: 18px;
    background: #f8faf8;
    transition: all 0.35s ease;
}

.method-card:hover {
    background: #ffffff;
    border-color: rgba(117, 172, 57, 0.35);
    transform: translateX(7px);
    box-shadow: 0 15px 40px rgba(21, 59, 80, 0.09);
}


/* Icon */

.method-icon {
    width: 55px;
    height: 55px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: #ffffff;
    color: rgb(117, 172, 57);
    font-size: 24px;
    box-shadow: 0 5px 18px rgba(21, 59, 80, 0.07);
    transition: all 0.35s ease;
}

.method-card:hover .method-icon {
    background: rgb(117, 172, 57);
    color: #ffffff;
}


/* Content */

.method-label {
    display: block;
    margin-bottom: 5px;
    color: rgb(117, 172, 57);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.5px;
}

.method-card h3 {
    margin-bottom: 9px;
    color: #153b50;
    font-size: 21px;
    font-weight: 700;
}

.method-card p {
    margin: 0;
    color: #6d7b82;
    font-size: 14px;
    line-height: 1.75;
}


/* Hover Number */

.method-step:hover .method-dot {
    background: #153b50;
}


/* Responsive */

@media (max-width: 767px) {

    .implementation-methodology {
        padding: 65px 0;
    }

    .method-heading {
        margin-bottom: 50px;
    }

    .method-heading h2 {
        font-size: 32px;
    }

    .method-timeline::before {
        left: 25px;
    }

    .method-step {
        gap: 18px;
    }

    .method-dot {
        width: 52px;
        height: 52px;
        border-width: 5px;
    }

    .method-dot span {
        font-size: 12px;
    }

    .method-card {
        display: block;
        padding: 24px 20px;
    }

    .method-icon {
        margin-bottom: 18px;
    }

    .method-card h3 {
        font-size: 19px;
    }

    .method-card p {
        font-size: 14px;
    }

    .method-card:hover {
        transform: translateY(-4px);
    }
}
</style>

<style>
    .impact-outcomes-section {
    padding: 100px 0;
    background: #f7f9f6;
}


/* Heading */

.impact-heading {
    display: flex;
    align-items: end;
    justify-content: space-between;
    gap: 40px;
    margin-bottom: 55px;
}

.impact-tag {
    display: block;
    margin-bottom: 11px;
    color: rgb(117, 172, 57);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
}

.impact-heading h2 {
    margin: 0;
    color: #153b50;
    font-size: 43px;
    font-weight: 750;
}

.impact-heading h2 span {
    color: rgb(117, 172, 57);
}

.impact-heading > p {
    max-width: 430px;
    margin: 0;
    color: #6f7d83;
    font-size: 15px;
    line-height: 1.75;
}


/* Grid */

.impact-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}


/* Cards */

.impact-card {
    position: relative;
    min-height: 315px;
    padding: 28px;
    background: #ffffff;
    border: 1px solid #e4ebe5;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.35s ease;
}

.impact-card:hover {
    transform: translateY(-7px);
    border-color: rgba(117, 172, 57, 0.35);
    box-shadow: 0 18px 45px rgba(21, 59, 80, 0.10);
}


/* First Card */

.impact-large {
    grid-column: span 2;
    background: #153b50;
}

.impact-large h3 {
    color: #ffffff;
}

.impact-large p {
    color: rgba(255, 255, 255, 0.70);
}

.impact-large .impact-line {
    background: rgba(255, 255, 255, 0.15);
}

.impact-large .impact-keyword {
    color: rgb(117, 172, 57);
}


/* Top */

.impact-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
}

.impact-icon {
    width: 58px;
    height: 58px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 16px;
    background: rgba(117, 172, 57, 0.11);
    color: rgb(117, 172, 57);
    font-size: 25px;
    transition: all 0.35s ease;
}

.impact-card:hover .impact-icon {
    background: rgb(117, 172, 57);
    color: #ffffff;
    transform: scale(1.06);
}

.impact-large .impact-icon {
    background: rgba(255, 255, 255, 0.10);
}


/* Number */

.impact-number {
    color: #dce6df;
    font-size: 38px;
    line-height: 1;
    font-weight: 800;
}

.impact-large .impact-number {
    color: rgba(255, 255, 255, 0.15);
}


/* Content */

.impact-card h3 {
    margin-bottom: 12px;
    color: #153b50;
    font-size: 20px;
    line-height: 1.35;
    font-weight: 700;
}

.impact-card p {
    margin: 0;
    color: #6d7b82;
    font-size: 14px;
    line-height: 1.75;
}


/* Bottom */

.impact-line {
    width: 100%;
    height: 1px;
    margin: 25px 0 15px;
    background: #e8ede9;
}

.impact-keyword {
    color: #153b50;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.3px;
    text-transform: uppercase;
}


/* Wide Card */

.impact-wide {
    grid-column: span 2;
}


/* Bottom Statement */

.impact-statement {
    display: flex;
    align-items: center;
    gap: 25px;
    margin-top: 25px;
    padding: 30px 35px;
    border-radius: 20px;
    background: #ffffff;
    border: 1px solid #e4ebe5;
}

.statement-icon {
    width: 62px;
    height: 62px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 17px;
    background: rgb(117, 172, 57);
    color: #ffffff;
    font-size: 27px;
}

.impact-statement span {
    display: block;
    margin-bottom: 4px;
    color: rgb(117, 172, 57);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.7px;
}

.impact-statement h3 {
    margin-bottom: 5px;
    color: #153b50;
    font-size: 21px;
    font-weight: 700;
}

.impact-statement p {
    margin: 0;
    color: #718087;
    font-size: 14px;
}


/* Responsive */

@media (max-width: 991px) {

    .impact-outcomes-section {
        padding: 75px 0;
    }

    .impact-heading {
        display: block;
    }

    .impact-heading h2 {
        font-size: 37px;
        margin-bottom: 15px;
    }

    .impact-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .impact-large,
    .impact-wide {
        grid-column: span 2;
    }
}


@media (max-width: 575px) {

    .impact-outcomes-section {
        padding: 60px 0;
    }

    .impact-heading h2 {
        font-size: 31px;
    }

    .impact-grid {
        grid-template-columns: 1fr;
    }

    .impact-large,
    .impact-wide {
        grid-column: span 1;
    }

    .impact-card {
        min-height: auto;
    }

    .impact-statement {
        align-items: flex-start;
        padding: 25px;
        gap: 18px;
    }

    .statement-icon {
        width: 50px;
        height: 50px;
        font-size: 21px;
    }

    .impact-statement h3 {
        font-size: 18px;
    }
}
</style>

<style>
    .impact-journey-section {
    padding: 110px 0;
    background: #ffffff;
}


/* Header */

.impact-journey-header {
    display: flex;
    align-items: end;
    justify-content: space-between;
    gap: 50px;
    margin-bottom: 90px;
}

.impact-title > span {
    display: block;
    margin-bottom: 12px;
    color: rgb(117, 172, 57);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
}

.impact-title h2 {
    margin: 0;
    color: #153b50;
    font-size: 45px;
    line-height: 1.15;
    font-weight: 700;
}

.impact-title h2 b {
    color: rgb(117, 172, 57);
    font-weight: 700;
}

.impact-intro {
    max-width: 430px;
}

.impact-intro p {
    margin: 0;
    color: #6d7b82;
    font-size: 15px;
    line-height: 1.8;
}


/* Journey */

.impact-journey {
    position: relative;
    max-width: 1050px;
    margin: 0 auto;
}


/* Center Line */

.impact-center-line {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    transform: translateX(-50%);
    background: linear-gradient(
        to bottom,
        transparent,
        #dce7df 8%,
        #dce7df 92%,
        transparent
    );
}


/* Item */

.impact-journey-item {
    position: relative;
    display: grid;
    grid-template-columns: 1fr 70px 1fr;
    align-items: center;
    min-height: 190px;
}


/* Sides */

.impact-side {
    min-height: 140px;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.impact-side-left {
    padding-right: 65px;
    text-align: right;
    align-items: flex-end;
}

.impact-side-right {
    padding-left: 65px;
    text-align: left;
    align-items: flex-start;
}


/* Big Number */

.impact-big-number {
    font-size: 105px;
    line-height: 1;
    font-weight: 900;
    letter-spacing: -5px;
    color: #edf2ee;
    transition: all 0.35s ease;
}

.impact-journey-item:hover .impact-big-number {
    color: rgba(117, 172, 57, 0.18);
    transform: scale(1.06);
}


/* Center */

.impact-center-dot {
    position: relative;
    z-index: 2;
    width: 62px;
    height: 62px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 7px solid #ffffff;
    border-radius: 50%;
    background: #153b50;
    color: rgb(117, 172, 57);
    font-size: 20px;
    box-shadow: 0 5px 20px rgba(21, 59, 80, 0.15);
    transition: all 0.35s ease;
}

.impact-journey-item:hover .impact-center-dot {
    background: rgb(117, 172, 57);
    color: #ffffff;
    transform: scale(1.12);
}


/* Text */

.impact-mini-label {
    display: block;
    margin-bottom: 8px;
    color: rgb(117, 172, 57);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.6px;
}

.impact-side h3 {
    max-width: 380px;
    margin: 0 0 10px;
    color: #153b50;
    font-size: 21px;
    line-height: 1.35;
    font-weight: 700;
}

.impact-side p {
    max-width: 400px;
    margin: 0;
    color: #6d7b82;
    font-size: 14px;
    line-height: 1.75;
}


/* Closing Banner */

.impact-closing {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-top: 75px;
    padding: 28px 32px;
    border-radius: 18px;
    background: #153b50;
}

.impact-closing-icon {
    width: 55px;
    height: 55px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    background: rgb(117, 172, 57);
    color: #ffffff;
    font-size: 23px;
}

.impact-closing span {
    display: block;
    margin-bottom: 4px;
    color: rgb(117, 172, 57);
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 1.7px;
}

.impact-closing h3 {
    margin: 0;
    color: #ffffff;
    font-size: 20px;
    font-weight: 700;
}

.impact-closing p {
    margin: 0 0 0 auto;
    max-width: 400px;
    color: rgba(255, 255, 255, 0.65);
    font-size: 13px;
    line-height: 1.6;
}


/* Tablet */

@media (max-width: 991px) {

    .impact-journey-section {
        padding: 80px 0;
    }

    .impact-journey-header {
        display: block;
        margin-bottom: 65px;
    }

    .impact-title h2 {
        font-size: 38px;
        margin-bottom: 18px;
    }

    .impact-intro {
        max-width: 650px;
    }

    .impact-side-left {
        padding-right: 40px;
    }

    .impact-side-right {
        padding-left: 40px;
    }
}


/* Mobile */

@media (max-width: 767px) {

    .impact-journey-section {
        padding: 65px 0;
    }

    .impact-title h2 {
        font-size: 31px;
    }

    .impact-journey {
        padding-left: 48px;
    }

    .impact-center-line {
        left: 23px;
        transform: none;
    }

    .impact-journey-item {
        display: block;
        min-height: auto;
        margin-bottom: 45px;
    }

    .impact-side-left,
    .impact-side-right {
        padding: 0 0 0 25px;
        text-align: left;
        align-items: flex-start;
    }

    .impact-side-left:has(.impact-big-number) {
        display: none;
    }

    .impact-big-number {
        display: none;
    }

    .impact-center-dot {
        position: absolute;
        top: 0;
        left: -48px;
        width: 48px;
        height: 48px;
        border-width: 5px;
        font-size: 16px;
    }

    .impact-side-right {
        padding-top: 5px;
    }

    .impact-side h3 {
        font-size: 19px;
    }

    .impact-closing {
        align-items: flex-start;
        flex-wrap: wrap;
        padding: 25px;
    }

    .impact-closing p {
        width: 100%;
        margin: 5px 0 0;
        padding-left: 75px;
    }
}
</style>
@endsection
@section('body')
<x-mainbanner name="About Us" para="We are here always.." imgs="/assets/imgs/banners/12.jpeg" />

<section class="first-section pt-5 py-md-5">
    <div class="container">
        <p class="text-center main-headling">Earth Initiative Foundation is a registered non-governmental organization
            working to strengthen education and child development through Corporate Social Responsibility (CSR)
            initiatives. Under its flagship CSR programme, NextGen Impact, the Foundation has launched the 'Build My
            School Mission' in Rajasthan, guided by the philosophy: "Let's not just build school, let's build a
            childhood worth remembering."</p>
        <img src="/assets/imgs/1/16.avif" alt="15" width="100%">
    </div>
</section>

<section class="second-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 flex-box">
                <div class="about-clm text-start pe-md-5">
                    <div class="title ct-tooltip">About Us</div>
                    <p>The mission focuses on strengthening government schools in under-served rural areas by upgrading learning infrastructure and improving basic student amenities. A commitment to equitable, joyful, and technology-enabled education for children from rural and economically weaker backgrounds.</p>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <img src="/assets/imgs/1/18.avif" alt="18" width="100%">
            </div>
        </div>
        <div class="row mt-90">
            <div class="col-12 col-md-6">
                <img src="/assets/imgs/1/19.avif" alt="18" width="100%">
            </div>
            <div class="col-12 col-md-6 flex-box">
                <div class="about-clm text-start ps-md-3 pe-md-2">
                    <div class="title ct-tooltip">Our Vision</div>
                    <p>A future where every government school inspires curiosity, nurtures creativity, and empowers every child through joyful learning, scientific exploration, innovation, and life skills to reach their fullest potential.</p>
                </div>

            </div>
        </div>
        <div class="row mt-90">
            <div class="col-12 col-md-6 flex-box">
                <div class="about-clm text-start pe-md-5">
                    <div class="title ct-tooltip">Our Mission</div>
                    <p>Our mission is to create spaces where children feel safe, inspired, and excited to learn every day.</p>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <img src="/assets/imgs/1/18.avif" alt="18" width="100%">
            </div>
        </div>
    </div>
</section>

<section class="project-objectives-section">
    <div class="container">

        <!-- Heading -->
        <div class="objectives-heading text-center">
            <span class="objectives-label">OUR MISSION</span>
            <h2>Project <span>Objectives</span></h2>
            <p>
                Creating meaningful and sustainable change through
                technology, education, and community development.
            </p>
        </div>

        <!-- Objectives -->
        <div class="row g-4 mt-4">

            <!-- Objective 01 -->
            <div class="col-lg-4 col-md-6">
                <div class="objective-card">
                    <div class="objective-number">01</div>

                    <div class="objective-icon">
                        <i class="bi bi-laptop"></i>
                    </div>

                    <h4>Bridging the Digital Divide</h4>
                    <p>
                        To bridge the digital divide by introducing modern,
                        interactive teaching technology in government schools.
                    </p>
                </div>
            </div>

            <!-- Objective 02 -->
            <div class="col-lg-4 col-md-6">
                <div class="objective-card">
                    <div class="objective-number">02</div>

                    <div class="objective-icon">
                        <i class="bi bi-droplet"></i>
                    </div>

                    <h4>Safe Drinking Water</h4>
                    <p>
                        To provide safe and clean drinking water facilities
                        for students and staff.
                    </p>
                </div>
            </div>

            <!-- Objective 03 -->
            <div class="col-lg-4 col-md-6">
                <div class="objective-card">
                    <div class="objective-number">03</div>

                    <div class="objective-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>

                    <h4>Better Learning Environment</h4>
                    <p>
                        To create a more inspiring, safe, and technology-enabled
                        learning environment for children in rural Rajasthan.
                    </p>
                </div>
            </div>

            <!-- Objective 04 -->
            <div class="col-lg-6 col-md-6">
                <div class="objective-card objective-card-wide">
                    <div class="objective-number">04</div>

                    <div class="objective-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>

                    <h4>Faculty Capacity Building</h4>
                    <p>
                        To build the capacity of school faculty through
                        hands-on training on the use of the installed technology.
                    </p>
                </div>
            </div>

            <!-- Objective 05 -->
            <div class="col-lg-6 col-md-12">
                <div class="objective-card objective-card-wide">
                    <div class="objective-number">05</div>

                    <div class="objective-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h4>Building Sustainable Partnerships</h4>
                    <p>
                        To strengthen the partnership between civil society,
                        CSR partners, and government schools for long-term,
                        sustainable impact.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="project-components-section">
    <div class="container">

        <!-- Section Heading -->
        <div class="components-header">
            <div>
                <span class="components-tag">WHAT WE DELIVER</span>
                <h2>Project <span>Components</span></h2>
            </div>

            <p>
                Key interventions designed to transform classrooms,
                improve infrastructure, and empower teachers.
            </p>
        </div>

        <!-- Component 01 -->
        <div class="component-item">
            <div class="component-index">
                <span>01</span>
            </div>

            <div class="component-content">
                <div class="component-icon">
                    <i class="bi bi-display"></i>
                </div>

                <div class="component-text">
                    <span class="component-small-title">DIGITAL LEARNING</span>

                    <h3>AI Interactive Flat Panel Display</h3>

                    <p>
                        An AI-enabled Interactive Flat Panel Display was
                        installed in each school to enable digital and
                        interactive learning. The Smartboard allows teachers
                        to deliver multimedia-based lessons, access digital
                        content, and make classroom learning more engaging
                        and effective for students.
                    </p>
                </div>
            </div>
        </div>

        <!-- Component 02 -->
        <div class="component-item component-reverse">
            <div class="component-index">
                <span>02</span>
            </div>

            <div class="component-content">
                <div class="component-icon">
                    <i class="bi bi-droplet-half"></i>
                </div>

                <div class="component-text">
                    <span class="component-small-title">HEALTH & HYGIENE</span>

                    <h3>Water Cooler with RO Unit</h3>

                    <p>
                        A water cooler with RO unit was installed at each
                        school to ensure a safe and clean drinking water
                        facility for students and staff, addressing a basic
                        but critical infrastructure gap in government
                        school premises.
                    </p>
                </div>
            </div>
        </div>

        <!-- Component 03 -->
        <div class="component-item">
            <div class="component-index">
                <span>03</span>
            </div>

            <div class="component-content">
                <div class="component-icon">
                    <i class="bi bi-person-video3"></i>
                </div>

                <div class="component-text">
                    <span class="component-small-title">CAPACITY BUILDING</span>

                    <h3>Faculty Training</h3>

                    <p>
                        A short, hands-on training session was conducted
                        for school faculty at each location on the operation
                        and effective classroom use of the Smartboard,
                        ensuring the technology is put to sustained use
                        after installation.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="schools-covered-section">
    <div class="container">

        <!-- Header -->
        <div class="schools-header text-center">
            <span class="schools-label">PROJECT REACH</span>

            <h2>
                Schools Covered <span>Under the Project</span>
            </h2>

            <p>
                The project was implemented across three government schools
                spread over two districts of Rajasthan — Churu and Nagaur.
            </p>
        </div>


        <!-- Schools -->
        <div class="row g-4 mt-5">

            <!-- School 01 -->
            <div class="col-lg-4 col-md-6">
                <div class="school-card">

                    <div class="school-top">
                        <div class="school-number">01</div>

                        <div class="school-location">
                            <i class="bi bi-geo-alt-fill"></i>
                            Churu, Rajasthan
                        </div>
                    </div>

                    <div class="school-icon">
                        <i class="bi bi-building"></i>
                    </div>

                    <h3>
                        Government Senior Secondary School
                    </h3>

                    <div class="school-address">
                        <i class="bi bi-pin-map"></i>
                        <span>
                            Near Municipality, Sahwa, Churu,
                            Rajasthan – 331302
                        </span>
                    </div>

                    <div class="school-divider"></div>

                    <div class="school-info">
                        <div class="info-icon">
                            <i class="bi bi-person"></i>
                        </div>

                        <div>
                            <small>HEAD OF INSTITUTION</small>
                            <strong>
                                Shri Mangilal Ji
                            </strong>
                            <span>Principal</span>
                        </div>
                    </div>

                </div>
            </div>


            <!-- School 02 -->
            <div class="col-lg-4 col-md-6">
                <div class="school-card">

                    <div class="school-top">
                        <div class="school-number">02</div>

                        <div class="school-location">
                            <i class="bi bi-geo-alt-fill"></i>
                            Churu, Rajasthan
                        </div>
                    </div>

                    <div class="school-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>

                    <h3>
                        Government Upper Primary School No. 3
                    </h3>

                    <div class="school-address">
                        <i class="bi bi-pin-map"></i>
                        <span>
                            Near Ramdev Temple, Sahwa, Churu,
                            Rajasthan
                        </span>
                    </div>

                    <div class="school-divider"></div>

                    <div class="school-info">
                        <div class="info-icon">
                            <i class="bi bi-person"></i>
                        </div>

                        <div>
                            <small>HEAD OF INSTITUTION</small>
                            <strong>
                                Smt. Pramila
                            </strong>
                            <span>Headmistress</span>
                        </div>
                    </div>

                </div>
            </div>


            <!-- School 03 -->
            <div class="col-lg-4 col-md-6">
                <div class="school-card">

                    <div class="school-top">
                        <div class="school-number">03</div>

                        <div class="school-location">
                            <i class="bi bi-geo-alt-fill"></i>
                            Nagaur, Rajasthan
                        </div>
                    </div>

                    <div class="school-icon">
                        <i class="bi bi-bank"></i>
                    </div>

                    <h3>
                        Shaheed Sumer Singh Sankhla Govt.
                        Senior Secondary School
                    </h3>

                    <div class="school-address">
                        <i class="bi bi-pin-map"></i>
                        <span>
                            Jhatera, G.P. – Jhadisara,
                            District Nagaur, Rajasthan
                        </span>
                    </div>

                    <div class="school-divider"></div>

                    <div class="school-info">
                        <div class="info-icon">
                            <i class="bi bi-person"></i>
                        </div>

                        <div>
                            <small>HEAD OF INSTITUTION</small>
                            <strong>
                                Shri Bhag Chand Tiawri
                            </strong>
                            <span>Principal</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- Bottom Stats -->
        <div class="school-stats">

            <div class="school-stat">
                <div class="stat-icon">
                    <i class="bi bi-buildings"></i>
                </div>

                <div>
                    <strong>03</strong>
                    <span>Government Schools</span>
                </div>
            </div>

            <div class="stat-line"></div>

            <div class="school-stat">
                <div class="stat-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>

                <div>
                    <strong>02</strong>
                    <span>Districts Covered</span>
                </div>
            </div>

            <div class="stat-line"></div>

            <div class="school-stat">
                <div class="stat-icon">
                    <i class="bi bi-map"></i>
                </div>

                <div>
                    <strong>Rajasthan</strong>
                    <span>Project State</span>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="implementation-methodology">
    <div class="container">

        <!-- Heading -->
        <div class="method-heading text-center">
            <span>HOW WE IMPLEMENTED</span>
            <h2>Implementation <strong>Methodology</strong></h2>
            <p>
                A structured, collaborative approach ensuring that every
                intervention reaches the schools effectively and sustainably.
            </p>
        </div>

        <!-- Timeline -->
        <div class="method-timeline">

            <!-- Step 01 -->
            <div class="method-step">
                <div class="method-dot">
                    <span>01</span>
                </div>

                <div class="method-card">
                    <div class="method-icon">
                        <i class="bi bi-search"></i>
                    </div>

                    <div>
                        <span class="method-label">STEP 01</span>
                        <h3>School Identification</h3>
                        <p>
                            Government schools in rural and economically
                            weaker areas of Churu and Nagaur districts were
                            identified in consultation with local authorities
                            and school administration.
                        </p>
                    </div>
                </div>
            </div>


            <!-- Step 02 -->
            <div class="method-step">
                <div class="method-dot">
                    <span>02</span>
                </div>

                <div class="method-card">
                    <div class="method-icon">
                        <i class="bi bi-file-earmark-check"></i>
                    </div>

                    <div>
                        <span class="method-label">STEP 02</span>
                        <h3>Permission & Coordination</h3>
                        <p>
                            Formal letters of permission and cooperation were
                            sent to the Principal/Headmistress of each
                            identified school, seeking approval for the site
                            visit, survey, and installation.
                        </p>
                    </div>
                </div>
            </div>


            <!-- Step 03 -->
            <div class="method-step">
                <div class="method-dot">
                    <span>03</span>
                </div>

                <div class="method-card">
                    <div class="method-icon">
                        <i class="bi bi-clipboard2-check"></i>
                    </div>

                    <div>
                        <span class="method-label">STEP 03</span>
                        <h3>Site Visit & Survey</h3>
                        <p>
                            A site visit/survey was conducted at each school
                            to assess infrastructure, identify suitable space
                            for installation, and check electrical points and
                            other requirements.
                        </p>
                    </div>
                </div>
            </div>


            <!-- Step 04 -->
            <div class="method-step">
                <div class="method-dot">
                    <span>04</span>
                </div>

                <div class="method-card">
                    <div class="method-icon">
                        <i class="bi bi-tools"></i>
                    </div>

                    <div>
                        <span class="method-label">STEP 04</span>
                        <h3>Installation</h3>
                        <p>
                            The AI Interactive Flat Panel Display (Smartboard)
                            and Water Cooler were installed at each of the
                            three schools.
                        </p>
                    </div>
                </div>
            </div>


            <!-- Step 05 -->
            <div class="method-step">
                <div class="method-dot">
                    <span>05</span>
                </div>

                <div class="method-card">
                    <div class="method-icon">
                        <i class="bi bi-person-video3"></i>
                    </div>

                    <div>
                        <span class="method-label">STEP 05</span>
                        <h3>Faculty Orientation</h3>
                        <p>
                            A short training/orientation session was organized
                            for teachers on operating the Smartboard for
                            effective classroom use.
                        </p>
                    </div>
                </div>
            </div>


            <!-- Step 06 -->
            <div class="method-step">
                <div class="method-dot">
                    <span>06</span>
                </div>

                <div class="method-card">
                    <div class="method-icon">
                        <i class="bi bi-check2-circle"></i>
                    </div>

                    <div>
                        <span class="method-label">STEP 06</span>
                        <h3>Handover & Follow-up</h3>
                        <p>
                            The facilities were formally handed over to the
                            school administration, with a commitment to
                            periodic follow-up to ensure continued and
                            effective usage.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="impact-journey-section">
    <div class="container">

        <!-- Heading -->
        <div class="impact-journey-header">
            <div class="impact-title">
                <span>THE CHANGE WE AIM TO CREATE</span>
                <h2>Expected Impact <b>& Outcomes</b></h2>
            </div>

            <div class="impact-intro">
                <p>
                    The project is designed to create meaningful change
                    beyond infrastructure — improving learning, well-being,
                    teacher capacity, and long-term educational outcomes.
                </p>
            </div>
        </div>


        <!-- Journey -->
        <div class="impact-journey">

            <!-- Central Line -->
            <div class="impact-center-line"></div>


            <!-- 01 -->
            <div class="impact-journey-item">

                <div class="impact-side impact-side-left">
                    <span class="impact-big-number">01</span>
                </div>

                <div class="impact-center-dot">
                    <i class="bi bi-lightning-charge-fill"></i>
                </div>

                <div class="impact-side impact-side-right">
                    <span class="impact-mini-label">
                        LEARNING EXPERIENCE
                    </span>

                    <h3>Enhanced Classroom Engagement</h3>

                    <p>
                        Enhanced classroom engagement through interactive,
                        technology-driven teaching methods.
                    </p>
                </div>

            </div>


            <!-- 02 -->
            <div class="impact-journey-item">

                <div class="impact-side impact-side-left">
                    <span class="impact-mini-label">
                        HEALTH & WELL-BEING
                    </span>

                    <h3>Improved Access to Safe Water</h3>

                    <p>
                        Improved access to safe drinking water, contributing
                        to better student health and attendance.
                    </p>
                </div>

                <div class="impact-center-dot">
                    <i class="bi bi-droplet-fill"></i>
                </div>

                <div class="impact-side impact-side-right">
                    <span class="impact-big-number">02</span>
                </div>

            </div>


            <!-- 03 -->
            <div class="impact-journey-item">

                <div class="impact-side impact-side-left">
                    <span class="impact-big-number">03</span>
                </div>

                <div class="impact-center-dot">
                    <i class="bi bi-stars"></i>
                </div>

                <div class="impact-side impact-side-right">
                    <span class="impact-mini-label">
                        INCLUSIVE EDUCATION
                    </span>

                    <h3>A More Inspiring Environment</h3>

                    <p>
                        A more inspiring and dignified learning environment
                        for children from rural and economically weaker
                        backgrounds.
                    </p>
                </div>

            </div>


            <!-- 04 -->
            <div class="impact-journey-item">

                <div class="impact-side impact-side-left">
                    <span class="impact-mini-label">
                        FACULTY DEVELOPMENT
                    </span>

                    <h3>Strengthened Teaching Capacity</h3>

                    <p>
                        Strengthened capacity of teaching staff to integrate
                        digital tools into everyday classroom instruction.
                    </p>
                </div>

                <div class="impact-center-dot">
                    <i class="bi bi-person-check-fill"></i>
                </div>

                <div class="impact-side impact-side-right">
                    <span class="impact-big-number">04</span>
                </div>

            </div>


            <!-- 05 -->
            <div class="impact-journey-item">

                <div class="impact-side impact-side-left">
                    <span class="impact-big-number">05</span>
                </div>

                <div class="impact-center-dot">
                    <i class="bi bi-globe2"></i>
                </div>

                <div class="impact-side impact-side-right">
                    <span class="impact-mini-label">
                        SUSTAINABLE CSR
                    </span>

                    <h3>Long-Term Collaborative Impact</h3>

                    <p>
                        A visible, lasting example of collaborative CSR
                        impact in the education sector of rural Rajasthan.
                    </p>
                </div>

            </div>

        </div>


        <!-- Closing Banner -->
        <div class="impact-closing">
            <div class="impact-closing-icon">
                <i class="bi bi-arrow-up-right"></i>
            </div>

            <div>
                <span>FROM INVESTMENT TO IMPACT</span>
                <h3>Creating Change That Lasts</h3>
            </div>

            <p>
                Building stronger schools, empowered teachers,
                and better opportunities for rural children.
            </p>
        </div>

    </div>
</section>
@endsection
