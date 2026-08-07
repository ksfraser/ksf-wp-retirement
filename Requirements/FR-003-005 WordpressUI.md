# FR-003-005 WordpressUI: WordPress Display & Sync of Retirement Planning Plan

**Related:** BR-003 Retirement Planning, FR-003-001..003

## Description
The WordPress site renders a client's Retirement Planning plan and provides a sync bridge to PersonalRecordsOrganizer.

## Primary actor
System (renders on shortcode) / Advisor (initiates sync).

## Main flow
1. Advisor embeds `[ksf_retirement_plan debtor="123"]`. 2. System loads and renders the plan. 3. Advisor syncs to PRO (fa_record_id linkage).

## Postconditions
Retirement Planning plan visible on WordPress; PRO record updated.
