class CreateKepplerBookingRooms < ActiveRecord::Migration[5.2]
  def change
    create_table :keppler_booking_rooms do |t|
      t.string :name
      t.string :description_small
      t.text :description_big
      t.string :cover
      t.string :permalink
      t.string :services_ids, array: true, default: []
      t.boolean :lock
      t.boolean :public
      t.integer :position
      t.datetime :deleted_at
      t.datetime :created_at
      t.datetime :updated_at
    end
  end
end