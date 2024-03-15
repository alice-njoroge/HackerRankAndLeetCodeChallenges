with cte as (
    select s.user_id,
           count(*) as total,
           sum(case when c.action = 'confirmed' then 1 else 0 end) as confirmed
    from signups s
             left join confirmations c on c.user_id = s.user_id
    group by s.user_id
)

select user_id, round(confirmed / total, 2) as confirmation_rate from cte;